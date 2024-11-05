# Module Manager & Generator for Laravel project.

**Module Manager** is used to manage and generate `Module` for laravel projects.

## Installation

You can install the package via Composer:

```bash
composer require dungdeha/module-manager
```

After installing the package, you need to publish the config file and the module stub files. You can do this by running the following command:

```php
php artisan vendor:publish --tag=module-manager
```


## Usage

To create a project use the following command, you have to replace the `MODULE_NAME` with the name of the module. 

```php
php artisan module:build MODULE_NAME
```

You may want to use ` --force` option to overwrite the existing module. if you use this option, it will replace all the exisitng files with the defalut stub files.


```php
php artisan module:build MODULE_NAME --force
```