# Blog App - Laravel Project

## Key Steps in this README:

1. **Clone the Repository**:
   - Instructions for cloning the GitHub repository to your local machine.
   - Run the following command:
     ```bash
     git clone https://github.com/Parthaj07/Blog-App.git
     ```

2. **Move to XAMPP `htdocs` Folder**:
   - Place the project folder inside the `htdocs` directory of your XAMPP installation.
   - After cloning, navigate to the `htdocs` folder in your XAMPP directory:
     ```bash
     C:\xampp\htdocs
     ```
   - Move or copy the `Blog-App` folder into `htdocs`. Your structure should look like:
     ```
     C:\xampp\htdocs\Blog-App
     ```

3. **Install Dependencies**:
   - Navigate to the `Blog-App` project directory in your terminal:
     ```bash
     cd C:\xampp\htdocs\Blog-App
     ```
   - Run the following command to install all PHP dependencies required for the project:
     ```bash
     composer install
     ```

4. **Set Up Environment File**:
   - Open the project in a code editor and create a `.env` file from `.env.example`:
     ```bash
     cp .env.example .env
     ```
   - Modify the following values to match your database configuration for example:
     ```
     
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=database_name
     DB_USERNAME=root
     DB_PASSWORD=
     ```
   - Create a new database under `phpMyAdmin` with the name specified in the `.env` file.

5. **Generate Application Key**:
   - Laravel requires a unique application key for encryption. You can generate it by running:
     ```bash
     php artisan key:generate
     ```

6. **Migrate and Seed the Database**:
   - Run the following Artisan commands to set up the database schema and sample data:
     ```bash
     php artisan migrate
     php artisan db:seed
     ```

7. **Start the Server**:
   - Use the following command to start the Laravel development server locally:
     ```bash
     php artisan serve
     ```
   - After starting the server, the blog listing page will be displayed at `http://localhost:8000`.

---

## Accessing the Application

### Viewing the Blog Listing Page:
  - After starting the server, the blog listing page will be available at `http://localhost:8000`.
  - You can view and interact with the blog posts here.

### Admin Login Page:
  - To access the admin login page, go to `http://localhost:8000/admin/login`.
  - Use the following credentials to log in:
    - **Email**: admin@admin.com
    - **Password**: password


