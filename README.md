# Simple Laravel Midtrans

Clone the repository and then run

```
composer install
```

To copy .env.example to .env, run this command

```
cp .env.example .env
```

Prepare a database and set it inside .env and do not forget to add your midtrans server key in .env, after that run this command to create tables

```
php artisan migrate
```

Run the development server with this command

```
php artisan serve
```