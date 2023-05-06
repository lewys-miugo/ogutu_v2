# Ogutu Personal Website

## Tech Stack
- Laravel Framework
- Tailwind CSS
- Filament PHP - For admin dashboard


## Setting up in a new machine/server
1. Clone the repository
```
git clone git@github.com:lewys-miugo/ogutu_personal2.git
```
2. Install all php dependencies
```
composer install
```
3. Install Javascript dependencies
```
npm install
```
4. Create an .env file for laravel
```
cp -a .env.example .env
```
5. Generate a key
```
php artisan key:generate
```

6. Create your database and add it to your .env file then run the migrations. We also need to seed some data in our seeders
``` 
php artisan migrate --seed
```
7. Incase of error run:
```
composer update --no-scripts
```
8. flowbite documentation
https://flowbite.com/docs/getting-started/laravel/
