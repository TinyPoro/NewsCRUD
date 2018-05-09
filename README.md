# Poro\NewsCRUD

Package quản lý bài viết, danh mục và tag, sử dụng [Laravel Backpack](https://github.com/Laravel-Backpack)

## Cài đặt
* `Lưu ý`: Trong quá trình cài đặt nếu gặp lỗi key length to long, bạn có thể làm theo [hướng dẫn](https://laravel-news.com/laravel-5-4-key-too-long-error) để khắc phục
1. Cài đặt Backpack Base và Crud
    ```
    composer require backpack/crud
    php artisan backpack:base:install
    php artisan backpack:crud:install
    ```
1. Theo hướng dẫn và cài đặt [LaravelBackpack Permission Manager](https://github.com/Laravel-Backpack/PermissionManager#install).

1. Cài đặt siêu package `Poro`.
    ```
    composer require poro_bp/newscrud
    ```

1. Thêm service provider vào trong file `config/app.php`:
    ```
    'PoroBp\NewsCRUD\NewsCRUDServiceProvider',
    ```

1. Publish service provider(nhớ có force để nó thay thế mấy cái file cũ của bạn).
    ```
    php artisan vendor:publish --force --provider="PoroBp\NewsCRUD\NewsCRUDServiceProvider"
    ```

1. Chạy migrate thui^^
    ```
    php artisan migrate
    ```

1. Xong rùi đó <3 