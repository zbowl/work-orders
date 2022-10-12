## Configure

I will be making a lot of assumptions. Hopefully with it all being included in the zip we can get it up and running with minimal steps.

- PHP 8
- Laravel 9

### Configure database in .env 

```dotenv
{
  ...
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=wms
    DB_USERNAME=
    DB_PASSWORD=
    ...
}
```

### Migrate and Seed the database
```shell
php artisan migrate --seed
```

### Serve the local server
```shell
php artisan serve
```

## Basic Usage

Navigate to http://localhost:8000

Login with credentials:
```text
 username: admin
 password: password
```
