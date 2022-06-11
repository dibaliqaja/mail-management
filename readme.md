<h1 align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="224px"/><br/>
  Sistem Manajemen Surat
</h1>
<p align="center">Sistem Manajemen Surat dibangun untuk memanajemen aktivitas surat menyurat pada sebuah organisasi dengan berbasis website</p>

<p align="center">
    <a href="https://github.com/dibaliqaja/pesantren-cms/releases" target="_blank">
        <img src="https://img.shields.io/badge/version-v1.0.0-red?style=for-the-badge&logo=none" alt="system version" />
    </a>
    &nbsp;
    <a href="https://github.com/dibaliqaja/pesantren-cms" target="_blank">
        <img src="https://img.shields.io/badge/Laravel-5.7.0-fb503b?style=for-the-badge&logo=laravel" alt="laravel version" />
    </a>
    &nbsp;
    <img src="https://img.shields.io/badge/license-mit-red?style=for-the-badge&logo=none" alt="license" />
</p>

### Features
- Admin Panel
  - Login
  - Logout
  - Dashboard
  - Manajamen Data Surat Masuk
  - Manajamen Data Surat Keluar
  - Manajemen Data Agenda Surat Masuk
  - Manajemen Data Agenda Surat Keluar
  - Disposisi Data Surat Masuk
  - Galeri Surat Masuk
  - Galeri Surat Keluar
  - Klasifikasi Surat
  - Manajemen Instansi
  - Manajemen Pengguna Sistem

Catatan: Pengguna sistem terbagi menjadi dua role, yaitu <b>admin</b> dan <b>petugas</b>

### ⚙️ Requirements
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension
### ⚡️ Installation
1. Clone GitHub repo for this project locally
```bash
git clone https://github.com/dibaliqaja/mail-management.git
```
2. Change directory in project which already clone
```bash
cd mail-management
```
3. Install Composer dependencies
```bash
composer install
```
4. Install NPM dependencies
```bash
npm install
```
5. Create a copy of your .env file
```bash
cp .env.example .env
```
6. Generate an app encryption key
```bash
php artisan key:generate
```
7. Create an empty database for our application

8. In the .env file, add database information to allow Laravel to connect to the database
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={database-name}
DB_USERNAME={username-database}
DB_PASSWORD={password-database}
```
9. Migrate the database
```bash
php artisan migrate
```
10. Create a symbolic link from public/storage to storage/app/public
```bash
php artisan storage:link
```
12. Seed the database
```bash
php artisan db:seed
```
12. Running project
```bash
php artisan serve
```

### User Credentials in Seeder
| #        | Administrator    | Petugas             |
| -------- | ---------------- | ------------------- |
| Email    | admin@surat.com  | petugas@surat.com   |
| Password | password         | password            |

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
