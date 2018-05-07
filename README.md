# Backpack\NewsCRUD

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Package quản lý bài viết, danh mục và tag, sử dụng [Laravel Backpack](https://github.com/Laravel-Backpack)

## Cài đặt
1) Cài đặt Backpack Base và Crud
```
composer require backpack/crud

php artisan backpack:base:install
php artisan backpack:crud:install
```
2) (Tùy chọn) Theo hướng dẫn và cài đặt [LaravelBackpack Permission Manager](https://github.com/Laravel-Backpack/PermissionManager#install)
1) [Tải bản mới nhất về](https://github.com/TinyPoro/NewsCRUD/archive/master.zip).

2) Đặt các thư mục 'app', 'database' và 'resources/views' vào trong project của bạn (gộp chúng lại). Nếu không có cảnh báo nào thì OK.

3) Thay namespace các file trong 'App` phù hợp với của bạn

4) Chạy migrate cơ sở dữ liệu:
```
php artisan migrate
```

5) Copy nội dung file `web.php` vào file `route.php` của bạn:

6) [Tùy chọn] Thêm các thành phần menu vào file resources/views/vendor/backpack/base/inc/sidebar.blade.php hoặc menu.blade.php:

```html
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>
```

