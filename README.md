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

### 1.Sử dụng git, clone code về server

```bash
git clone https://github.com/nguyenhuu1404/demo.git
```

### 2.Sử dụng composer cài đặt các thư viện laravel

```
cd demo
composer install
```

### 3.Copy .env.example file to .env 

```bash
cp .env.example .env
```

### 4.Cấu hình các thông tin database trong file .env

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### 5.Generate key

```bash
php artisan key:generate
```

### 6.Create database, seeder

```bash
php artisan migrate --seed
```

### 7.Local Development Server

```bash
php artisan serve
```

Truy cập ứng dụng [http://127.0.0.1:8000/users](http://127.0.0.1:8000/users)
