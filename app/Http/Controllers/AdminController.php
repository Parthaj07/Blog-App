<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
class AdminController extends Controller
{

    public function showRegisterForm()
{
    return view('admin.register');
}
public function register(Request $request)
{

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);


    return redirect()->route('admin.login');
}


    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }


    public function dashboard()
{

    if (!Auth::check()) {
        return redirect()->route('admin.login');
    }


    $posts = Post::all();


    return response()->view('admin.dashboard', compact('posts'))
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
}

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('admin.login');
    }

}
