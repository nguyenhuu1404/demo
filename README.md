<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Mô tả

- Xây dựng chức năng thêm, sửa, xóa người dùng
- Sử dụng [Laravel 5.8](https://laravel.com/docs/5.8)

## Server Requirements

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

## Hướng dẫn cài đặt

- Sử dụng git, clone code về server
- git clone https://github.com/nguyenhuu1404/colam.git

- Sử dụng composer cài đặt các thư viện laravel
- composer install

- Copy .env.example file to .env, cấu hình các thông tin database trong file .env
- cp .env.example .env

- Generate key
- php artisan key:generate

- Create database 
- php artisan migrate

- Local Development Server 
- php artisan serve
- truy cập ứng dụng [http://localhost:8000](http://localhost:8000)
