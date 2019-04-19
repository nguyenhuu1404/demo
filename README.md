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

### Sử dụng git, clone code về server

```bash
git clone https://github.com/nguyenhuu1404/demo.git
```

### Sử dụng composer cài đặt các thư viện laravel

```bash
composer install
```

### Copy .env.example file to .env 

```bash
cp .env.example .env
```

### Cấu hình các thông tin database trong file .env

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### Generate key

```bash
php artisan key:generate
```

### Create database, seeder

```bash
php artisan migrate --seed
```

### Local Development Server

```bash
php artisan serve
```

Truy cập ứng dụng [http://localhost:8000/users](http://localhost:8000/users)
