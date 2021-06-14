![github-01](https://user-images.githubusercontent.com/81413229/121632308-550ffd00-cab3-11eb-92fa-2a1fea090ce2.png)

Instagram: https://www.instagram.com/aroibanghq/

# CHA AROI BANG Management System

1. This system is for Cha Aroi Bang Management System for BrahimBrews
2. Laravel 8
3. Jetstream for authentication

## Required installation

1. First setup

```bash
composer install
```
- Change env.example to env

```bash
php artisan key:generate
```
- table name = brahimbrews


2. Install application dependencies

```bash
composer require laravel/jetstream
```
```bash
php artisan jetstream:install livewire
```
```bash
npm install && npm run dev
```
```bash
npm install chart.js
```

## For seed purpose
```bash
php artisan migrate:fresh --seed
```
