![Screenshot](https://codingwithrk.com/public/package-banner/rk-sweet-alert.png)

<h1 align="center">RK Sweet Alert</h1>

<p align="center">
    <a>
        <img alt="Packagist License" src="https://img.shields.io/packagist/l/codingwithrk/rk-sweet-alert">
    </a>
    <a>
        <img alt="Packagist Version" src="https://img.shields.io/packagist/v/codingwithrk/rk-sweet-alert">
    </a>
    <a>
        <img alt="Packagist Dependency Version" src="https://img.shields.io/packagist/dependency-v/codingwithrk/rk-sweet-alert/php">
    </a>
    <a>
        <img alt="Packagist Dependency Version" src="https://img.shields.io/packagist/dependency-v/codingwithrk/rk-sweet-alert/laravel%2Fframework">
    </a>
</p>

## Introduction

Hello fellow developers, using this package you can display sweet alerts.

### How to Install

```bash
composer require codingwithrk/rk-sweet-alert
````

### Add this before body closing tag

```bladehtml
<x-rk-sweet-alert/>
```

### After that in your controller

```php
session()->flash('rk-alert', [
    'title' => 'Are you sure?',
    'text' => 'You won\'t be able to revert this!',
    'icon' => 'warning',
    'confirmButtonText' => 'Yes, delete it!',
    'showCancelButton' => true,
    'confirmButtonColor' => '#3085d6',
    'cancelButtonColor' => '#d33',
]);
```

#### publish vendor config file 

```bash
php artisan vendor:publish --provider="Codingwithrk\RkSweetAlert\RkSweetAlertServiceProvider" --tag="config"
```

## License

This is open-sourced software licensed under the [MIT license](/LICENSE).