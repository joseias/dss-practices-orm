### # [DSS] Eloquent Practice

## Project initialization

After downloading the project execute
```shell
composer install
cp .env.example .env
```

Configure the .env file setting the proper values for database, user and password. Then execute these commands
```shell
php artisan key:generate
php artisan migrate:install
php artisan migrate
```

## Troubleshooting

If your DSS database already had some tables from a previous project, you can delete them using Adminer and execute the migrations again. Alternatively, you can execute this command
```shell
php artisan migrate:fresh
```

If you have dependency errors when initializing the project, execute this command
```shell
composer update
```