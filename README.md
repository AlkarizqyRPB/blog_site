![image](https://github.com/user-attachments/assets/d69e0ec1-fdc4-4fd1-b664-9f3434e307f7)


# Blog Website

This is a blog website developed using Laravel 11, Tailwind CSS, and Flowbite. The site allows users to browse blog posts with features like article search, pagination, and categorization.

## Features
- Responsive design.
- Search functionality to find articles by keywords.
- Pagination to navigate between articles.
- Categorized blog posts for better organization.

## Prerequisites
Before starting, ensure you have the following installed on your system:

- PHP >= 8.1
- Composer
- Node.js (with npm or yarn)
- MySQL (or any database supported by Laravel)
- Laragon

## Installation

Follow the steps below to set up the project:

1. **Clone the repository**
   ```bash
   git clone https://github.com/AlkarizqyRPB/blog_site.git
   cd blog_site
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Set up the environment file**
   Copy the `.env.example` file and rename it to `.env`:
   ```bash
   cp .env.example .env
   ```
   Then configure your database and other settings in the `.env` file.

5. **Generate the application key**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations**
   Set up the database by running migrations:
   ```bash
   php artisan migrate --seed
   ```

7. **Build assets**
   Compile Tailwind CSS and other frontend assets:
   ```bash
   npm run dev
   ```
   For production:
   ```bash
   npm run build
   ```

8. **Serve the application**
   Start the development server:
   ```bash
   php artisan serve
   ```
   The application should now be accessible at `http://localhost:8000`. If you use laragon use the pretty url.

## Frameworks and Libraries Used
- **Laravel 11**: Backend framework for building the application.
- **Tailwind CSS**: Utility-first CSS framework for styling.
- **Flowbite**: Components library built on Tailwind CSS.
- **MySQL**: Database for storing application data.
- **Vite.js**: Frontend build tool for faster and leaner development.

## Support
Jangan lupa untuk beri bintang di repository ini untuk mendukung pengembangan lebih lanjut!
