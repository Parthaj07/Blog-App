<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'string|max:255|nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }


        Post::create([
            'name' => $request->name,
            'content' => $request->content,
            'author' => $request->author ?? 'Admin',
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Post created successfully!');
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $post = Post::findOrFail($id);


        if ($request->hasFile('image')) {

            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }


            $post->image = $request->file('image')->store('images', 'public');
        }


        $post->update([
            'name' => $request->name,
            'content' => $request->content,
            'author' => $request->author ?? $post->author,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Post updated successfully!');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
