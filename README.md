# Git repo

```bash
git clone https://github.com/ramiabouzeid/cedrus_digital_backend.git
```

## Database
Create a database called cedrus_digital and import to it "cedrus_digital.sql"

## Laravel installation
Make sure to fix the credentials in ".env" and set the db connection user and password:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cedrus_digital
DB_USERNAME=root
DB_PASSWORD=
```
Follow the below steps to run laravel:
```bash
composer install
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
php artisan serve
```
Go to: [http://127.0.0.1:3000/](http://127.0.0.1:3000/)
