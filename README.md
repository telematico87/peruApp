# Peru Apps Problem 2

## Framework used

- laravel/lumen-framework: ^8.3.1

# Stack required

- PHP ^7.3
- Composer ^2.1.6
# Install dependencies

```
composer install
```

# Run project


php -S localhost:8000 -t public


# How to connect to endpoint 

```
http://localhost:8000/api/get-timezone-date
```

- By POST
- Params:

```
{
    time: 18:31:45,
    value: -3
}
```

