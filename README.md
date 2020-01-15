 
# Laracasts App

A Laravel app developed alongside Laravel 6 from Scratch course by Laracasts.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

```
PHP 7.2^
MySQL/MariaDB
Web Server (Apache/Nginx)
Composer
NPM
```

### Installing

Install composer modules

```
composer install
```

Install NPM modules

```
npm install
```

Edit .env file for your database credentials

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laracasts
DB_USERNAME=root
DB_PASSWORD=
```

If you're not using Valet, change the App URL to localhost as such

```
APP_URL=http://localhost
```

Run the database migration with pre-populated data

```
php artisan migrate --seed
```

If you're not using a web server, run serve

```
php artisan serve
```