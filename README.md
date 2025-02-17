# Laravel Authentication System 🔐

A robust user authentication system built with Laravel, featuring registration, login, and dashboard functionality.

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E)

## Features ✨

- 🛡️ User registration with form validation
- 🔑 Login/logout functionality
- 🚦 Protected dashboard route
- 📦 Session-based authentication
- 🎨 Responsive UI with Tailwind CSS
- 📱 Mobile-friendly design
- 📝 Form error handling
- ✅ Password confirmation
- 💾 Database migrations

## Table of Contents 📚

- [Requirements](#requirements-)
- [Installation](#installation-)
- [Configuration](#configuration-)
- [Usage](#usage-)
- [Project Structure](#project-structure-)
- [License](#license-)

## Requirements 📋

- PHP ≥ 8.1
- Composer
- Node.js ≥ 16
- MySQL ≥ 5.7 or MariaDB ≥ 10.3

## Installation 🛠️

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

## Configuration ⚙️

1. **Database Setup**  
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_auth
   DB_USERNAME=root
   DB_PASSWORD=
   ```

2. **Run Migrations**
   ```bash
   php artisan migrate
   ```

3. **Build Assets**
   ```bash
   npm run build
   ```

## Usage 🚀

1. **Start Development Server**
   ```bash
   php artisan serve
   ```

2. **Access the Application**  
   Open in your browser:  
   [http://localhost:8000](http://localhost:8000)

3. **Available Routes**
   - `/register` - User registration
   - `/login` - User login
   - `/` - Dashboard (authenticated users only)
   - `/logout` - Logout current user

## Project Structure 📂

```
├── app
│   └── Http / Controllers
│         └── AuthController.php
├── config
├── database
│   └── migrations
├── public
├── resources
│   └── views
│       ├── auth
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── theme
│       │   └── default.blade.php
│       └── dashboard.blade.php
├── routes
│   └── web.php
└── tests
```
