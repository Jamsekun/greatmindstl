<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Additional Installation info (magulo pa) 
Here's a cleaned-up, organized version for your README.md:

---

# Local Development Setup Guide

## Prerequisites
- [Visual Studio Code](https://code.visualstudio.com/) (VS Code)
- [XAMPP](https://www.apachefriends.org/download.html) (Includes Apache/MySQL)
- PHP 8.2 ([Installation Guide](https://www.phptutorial.net/php-tutorial/install-php/))
- [Composer](https://getcomposer.org/download/) (PHP Dependency Manager)
- [Node.js](https://nodejs.org/) (v18+ recommended, includes npm)

---

## Installation Steps

### 1. Environment Setup
1. Install **XAMPP** and start Apache/MySQL services
2. Install **PHP 8.2** (XAMPP usually includes PHP - verify via `php -v`)
3. Install **Composer** globally
4. Install **Node.js** (LTS version recommended)

### 2. Project Setup & Database Import
1. Download Full Backup from cPanel:
   - `cPanel > Backup > Download Full Backup`
   - Extract to your project folder (e.g., `C:\Projects\mywebsite`)

2. Export Database via phpMyAdmin:
   - `cPanel > phpMyAdmin > [Database] > Export > Quick > SQL Format`

3. Import Database to Local MySQL:
   - Start XAMPP MySQL
   - Access `http://localhost/phpmyadmin`
   - Create new database `greatmindstl_db`
   - Import downloaded `.sql` file

### 3. Configure VS Code
Add to `settings.json`:
```json
{
  "php.validate.executablePath": "C:\\Program Files\\php-8.2.28\\php.exe"
}
```

### 4. Configure Laravel Environment
1. Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=greatmindstl_db
DB_USERNAME=root
DB_PASSWORD=
```

2. Install dependencies:
```bash
composer install
npm install
npm run dev
```

---

## Troubleshooting

### Composer Install Errors
**Symptom**: Missing `fileinfo` extension  
**Fix**:
1. Open `php.ini` (Find path using `php --ini`)
2. Uncomment line:
   ```ini
   ;extension=fileinfo → extension=fileinfo
   ```
3. Restart server and verify:
   ```bash
   php -m | grep fileinfo
   composer install
   ```

### Database Connection Issues
**Verify credentials** in `.env` match:
- Database name: `greatmindstl_db`
- Username: `root` (XAMPP default)
- Password: *empty* (XAMPP default)

### NPM Command Not Found
1. Verify Node.js installation:
   ```bash
   node -v
   npm -v
   ```
2. Add Node.js to PATH if missing

---

## Launch Development Server
```bash
php artisan serve
npm run dev
```

Access application at `http://localhost:8000`

---

This structure uses proper Markdown formatting, clear section headers, code blocks, and troubleshooting solutions. Let me know if you need any adjustments! 🚀

