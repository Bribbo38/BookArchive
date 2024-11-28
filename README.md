# Book Management System

A web application built with Laravel for managing a collection of books. The system allows users to create, edit,
delete, and view books with additional features like assigning authors, categories, and uploading cover images.

## Features

- **CRUD Operations:** Create, read, update, and delete books,authors and categories.
- **Cover Image Upload:** Upload book cover images, resized to 400x520 pixels, with a unique filename.
- **Author and Category Management:** Assign books to authors and categories.
- **Validation:** Server-side validation for all input fields.
- **Multiple Theme design:** User-friendly interface built with DaisyUI and Tailwind CSS.

## Requirements

- PHP >= 8.2
- Composer
- Laravel >= 11.x
- Intervention Image Package (for image manipulation)
- A web server (e.g., Apache, Nginx)
- Database (MySQL, SQLite, etc.)

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Bribbo38/BookArchive.git
   cd BookArchive

2. **Install Dependencies:**
   ```bash
   composer install
   npm install && npm run dev

3. **Set Up Environment:**
    - Copy `.env.example` to `.env`
   ```bash
   cp .env.example .env
   ```
    - Update database and other configuration in the `.env` file.


4. **Run Migrations:**
   ```bash
   php artisan migrate

5. **Start the Application (development):**
   ```bash
   npm run start

6. **Clone the Repository:**
   Open your browser and navigate to `http://localhost:8000`.

## Image upload
- Book cover images are uploaded to the `public/img/covers` directory.
- Images are automatically resized to 400x520 pixels using the Intervention Image library.
