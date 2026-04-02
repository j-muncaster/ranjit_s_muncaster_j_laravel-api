# 🧸 Toy Store API & Frontend  
**Situ Ranjit & Jo Muncaster – Assignment 3**

This project is a full-stack application consisting of a Laravel backend API and a Vue-based frontend that consumes and displays toy and brand data.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 📦 Project Overview

- **Backend (Laravel API)**  
  Handles database interactions, business logic, and RESTful endpoints.

- **Frontend (Vue / AJAX)**  
  Fetches and displays data from the API.

## 🚀 Getting Started

### 1. Clone Both Repositories

```bash
git clone https://github.com/s-ranjit/ranjit_s_muncaster_j_vue-ajax
git clone https://github.com/j-muncaster/ranjit_s_muncaster_j_laravel-api
```

# ⚙️ Backend Setup (Laravel)

### 1. Navigate to Backend Folder
```bash
cd ranjit_s_muncaster_j_laravel-api
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Create Environment File
```bash
cp .env.example .env
```

### 4. Configure Environment Variables

Open `.env` and update your database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889  # (Mac MAMP) or 3306 (Windows)
DB_DATABASE=db_toy_store
DB_USERNAME=root
DB_PASSWORD=root  # (Mac) or leave empty for Windows
```

---

### 5. Create Database

- Start MAMP / WAMP / XAMPP  
- Open phpMyAdmin  
- Create a database named:

```
db_toy_store
```

---

### 6. Run Migrations & Seed Database

```bash
php artisan migrate:fresh --seed
```

---

### 7. Start Laravel Server

```bash
php artisan serve
```

Backend will run at :
```
http://127.0.0.1:8000
```

---

## 🔌 API Endpoints

### Brands

| Method | Endpoint           | Description        |
|--------|------------------|------------------|
| GET    | `/api/brands`      | Get all brands     |
| GET    | `/api/brands/{id}` | Get single brand   |
| POST   | `/api/brands`      | Create brand       |
| PATCH  | `/api/brands/{id}` | Update brand       |
| DELETE | `/api/brands/{id}` | Delete brand       |

---

### Toys

| Method | Endpoint         | Description      |
|--------|----------------|----------------|
| GET    | `/api/toys`      | Get all toys     |
| GET    | `/api/toys/{id}` | Get single toy   |
| POST   | `/api/toys`      | Create toy       |
| PATCH  | `/api/toys/{id}` | Update toy       |
| DELETE | `/api/toys/{id}` | Delete toy       |

---

# 🎨 Frontend Setup (Vue)

### 1. Navigate to Frontend Folder
```bash
cd ranjit_s_muncaster_j_vue-ajax
```

### 2. Install Dependencies
```bash
npm install
```

### 3. Run Development Server
```bash
npm run dev
```

Frontend will run at:
```
http://localhost:5173
```

---

## 🔗 Connecting Frontend to Backend

Ensure your frontend is making requests to:

```
http://127.0.0.1:8000/api
```

---

## ⚠️ Important Notes

- Make sure the Laravel server is running before starting the frontend  
- If API requests fail:
  - Check the API URL in your frontend code  
  - Ensure CORS is enabled in Laravel  
- Database must be created **before** running migrations  

---

## 🗂️ GitHub Workflow

- Separate branches for features and sections  
- Clear and consistent branch naming  
- Regular commits with meaningful messages  
- `.gitignore` included  
- Well-documented README  

---

## 🕰 History

📆 Created on April 1, 2026  

---

## 👨‍💻 Credits

Designed and Developed by:  
**Situ Ranjit** & **Josephine Muncaster** 🎨  

---

## 📫 Contact

- [Situ Ranjit – LinkedIn](https://www.linkedin.com/in/situ-ranjit-187970325/)  
- [Josephine Muncaster – LinkedIn](https://www.linkedin.com/in/josephine-muncaster-382674135/)  

---

## 📄 License

MIT License  