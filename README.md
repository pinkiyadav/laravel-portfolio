# Laravel Portfolio Project

A personal portfolio website built with **Laravel 10**, **MySQL**, and **Bootstrap**.

## 📸 Preview
![Local Preview](/screenshots/local-preview.png)

## 🛠️ Tech Stack
- **Framework:** Laravel
- **Database:** MySQL
- **Frontend:** Blade, CSS, JS
- **Tools:** Composer, NPM, XAMPP

## 🚀 Local Installation

1. **Clone the repo:**
   ```bash
   git clone [https://github.com/pinkiyadav/laravel-portfolio](https://github.com/pinkiyadav/laravel-portfolio)
   cd laravel-portfolio
Install Dependencies:

Bash
composer install
npm install && npm run dev
Environment Setup:

Copy .env.example to .env.

Update DB_DATABASE, DB_USERNAME, and DB_PASSWORD.

Run php artisan key:generate.

Database Migration & Seeding:

Bash
php artisan migrate:fresh --seed
Start Server:

Bash
php artisan serve

---

### 3. Push Changes to GitHub
To make the image appear on your GitHub page, you must push the new image file and the updated README:

```powershell
git add .
git commit -m "Update README with local screenshot and installation guide"
git push origin main
