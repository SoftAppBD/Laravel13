# Laravel 13 Admin Panel Setup

This project uses:
- Laravel 13
- PHP 8.3+
- Fortify for authentication
- Sanctum for API authentication
- AdminLTE-style backend panel
- SweetAlert for alert messages

> This README assumes the **final code is already pushed to Git**, including all route/controller/view changes and all required packages in `composer.json` / `package.json`.
>
> That means after clone, you should **not** need to install Fortify, Sanctum, or SweetAlert manually one by one. A normal `composer install` and `npm install` should be enough.

---

## 1) Server Requirements

Make sure these are installed on your machine:

- PHP 8.3 or higher
- Composer
- Node.js + npm
- MySQL / MariaDB
- Git

Also make sure common PHP extensions are enabled, especially:

- ctype
- fileinfo
- mbstring
- openssl
- pdo
- pdo_mysql
- tokenizer
- xml

---

## 2) Clone Project

```bash
git clone <YOUR_GIT_REPOSITORY_URL>
cd <PROJECT_FOLDER_NAME>
```

Example:

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

---

## 3) Install Dependencies

### PHP / Composer packages
```bash
composer install
```

### Frontend packages
```bash
npm install
```

> `vendor` and `node_modules` are normally **not pushed to Git**, so these two commands are required after every fresh clone.

---

## 4) Environment File

Create `.env` from `.env.example`:

```bash
cp .env.example .env
```

Windows CMD:

```bash
copy .env.example .env
```

---

## 5) Generate App Key

```bash
php artisan key:generate
```

---

## 6) Configure Database

Open `.env` and set your database credentials.

Example:

```env
APP_NAME=Laravel13
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel13
DB_USERNAME=root
DB_PASSWORD=
```

Create the database first from phpMyAdmin / MySQL if it does not already exist.

---

## 7) Run Migrations

```bash
php artisan migrate
```

If the project includes seeders and you want demo data:

```bash
php artisan db:seed
```

Or:

```bash
php artisan migrate --seed
```

---

## 8) Build Frontend Assets

For production-like build:

```bash
npm run build
```

For local development with Vite watcher:

```bash
npm run dev
```

---

## 9) Clear Cache (Recommended)

```bash
php artisan optimize:clear
```

This is useful after a fresh clone or when routes/views/config look stale.

---

## 10) Run Project

```bash
php artisan serve
```

Open in browser:

```text
http://127.0.0.1:8000
```

---

## 11) Authentication Flow

Expected behavior:

- `/` → guest হলে login page, logged in হলে dashboard
- `/login` → login page
- `/register` → registration page
- `/dashboard` → authenticated dashboard
- `/home` → redirects to `/dashboard`
- `/profile` → profile settings page (if added in final project)

---

## 12) API Usage

If Sanctum API routes are included in the final project, API endpoints will usually be under:

```text
/api/*
```

Example common routes:

- `POST /api/register`
- `POST /api/login`
- `GET /api/user`
- `POST /api/logout`

Protected routes require a Bearer token.

---

## 13) Important Note About Packages

If your **final pushed project already contains** these packages in `composer.json`, then you do **not** need to install them manually after clone:

- `laravel/fortify`
- `laravel/sanctum`
- `realrashid/sweet-alert`

In that case, this is enough:

```bash
composer install
```

But if any package is missing from `composer.json`, then clone করার পর manually install দিতে হবে.

Example:

```bash
composer require laravel/fortify
composer require laravel/sanctum
composer require realrashid/sweet-alert
```

So before pushing to Git, make sure the final `composer.json` is committed.

---

## 14) Common Commands

### Show all routes
```bash
php artisan route:list
```

### Clear all caches
```bash
php artisan optimize:clear
```

### Rebuild autoload
```bash
composer dump-autoload
```

### Run tests
```bash
php artisan test
```

---

## 15) Common Errors and Fixes

### 1. Class / package not found
Run:

```bash
composer install
composer dump-autoload
php artisan optimize:clear
```

### 2. Vite manifest not found / CSS-JS not loading
Run:

```bash
npm install
npm run build
```

### 3. Database connection error
Check `.env` database credentials and confirm the database exists.

### 4. SweetAlert error like `No hint path defined for [sweetalert]`
That means the SweetAlert package is being used in Blade, but the package is not installed.

Fix:

```bash
composer install
```

If still missing, it was not committed in `composer.json`. Then run:

```bash
composer require realrashid/sweet-alert
php artisan optimize:clear
```

### 5. Fortify registration/login binding errors
Run:

```bash
composer install
composer dump-autoload
php artisan optimize:clear
```

Then verify these exist in the project:

- `app/Providers/FortifyServiceProvider.php`
- `app/Actions/Fortify/*`
- `bootstrap/providers.php`

### 6. Page shows old content after changes
Run:

```bash
php artisan optimize:clear
```

---

## 16) Fresh Setup Summary

After a fresh clone, the normal full setup is:

```bash
git clone <YOUR_GIT_REPOSITORY_URL>
cd <PROJECT_FOLDER_NAME>
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan optimize:clear
php artisan migrate
npm run build
php artisan serve
```

Windows CMD version of `.env` copy:

```bash
copy .env.example .env
```

---

## 17) Recommended Git Practice

Before pushing, make sure these are committed:

- `composer.json`
- `composer.lock`
- `package.json`
- `package-lock.json`
- all changed controllers / routes / views / providers / migrations

Do **not** push:

- `vendor/`
- `node_modules/`
- `.env`

---

## 18) Final Note

If this repository is the final working version, then after clone you normally only need:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

If anything still breaks after that, the most common reason is:
- missing package not committed to `composer.json`
- wrong `.env` database config
- frontend assets not built
- stale cache

