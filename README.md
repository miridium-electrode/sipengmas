# Cara menjalankan aplikasi secara lokal:

## Windows

Dependensi:
1. XAMPP dengan php 7.4
2. composer
3. nodejs 16.x.x
4. Git

Menjalankan:

1. clone repo
2. `composer install`
3. copy file .env.example ke .env
4. `php artisan key:generate`
5. buat database di mysql
6. edit DB_DATABASE di file .env sesuai dengan nama database yang dibuat di mysql
7. `php artisan migrate`
8. `php artisan db:seed`
9. `npm install`
10. `npm run prod`
11. `php artisan serve`