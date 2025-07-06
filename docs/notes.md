### Khởi tạo dự án Laravel mới nhất với lệnh
```php
    composer create-project laravel/laravel example-app
```
-   Trong đó example-app là tên của dự án đó:
    +   Tên của dự án không có dấu, không có khoảng trắng           (VD1: dự án của tôi -> Sai; VD2:  du-an-cua-toi -> Đúng)
    +   Dùng chữ thường, dấu gạch ngang - hoặc gạc dưới _           (VD1: my-app; shop-laptop, backend_app,... -> Đúng)
    +   Không nên dùng ký tự đặc biệt (@, #, !, &, *, ^, (), v.v.)  (VD1: @myapp -> Sai, example!app -> Sai,...)
    +   Không nên bắt đầu bằng số                                   (VD1: 2025-learn-laravel -> Sai; VD2: learn-laravel-2025 -> Đúng)

### Khởi tạo dự án Laravel cũ hơn các với lệnh
```php
    composer create-project "laravel/laravel:^8.0" example-app
    composer create-project "laravel/laravel:^9.0" example-app
    composer create-project "laravel/laravel:^10.0" example-app
    composer create-project "laravel/laravel:^11.0" example-app
    composer create-project "laravel/laravel:^12.0" example-app
```
-   Các lệnh này lần lượt sẽ tạo 1 dự án laravel phiên bản 8,9,10,11,12
-   Có thể hiểu là Laravel 8 trở lên nhưng không vượt quá quá 9
-   Tương tự Laravel 9 trở lên nhưng không vượt quá 10, 10 không vượt quá 11 và 11 không vượt quá 12,...

### Khởi tạo dự án Laravel với version cụ thể
```php
    composer create-project "laravel/laravel:^8.83.27" old-example-app
    composer create-project "laravel/laravel:^9.52.14" old-example-app
```
-   Các lệnh này lần lượt sẽ tạo 1 dự án laravel phiên bản 8,9,10,11,12
-   Có thể hiểu là Laravel 8 trở lên nhưng không vượt quá quá 9
-   Tương tự Laravel 9 trở lên nhưng không vượt quá 10, 10 không vượt quá 11 và 11 không vượt quá 12,...

### Khởi chạy dự án (ứng dụng) Laravel với 2 cách
-   Cách 1: Dùng PHP để khởi động Web Server nội bộ:
    +   cd (change-directory) và thư mục dự án (VD: learn-laravel)
    +   Tiếp đó cd và thư mục public
    +   Chạy lệnh:
    ```php 
        php -S localhost:8080 
    ```
    +   Port tự chọn, miễn không trùng với 1 port khác đang chạy (VD: 8000,8080,8888,...)
-   Cách 2: Dùng Artisan do Laravel cung cấp (khuyến nghị, tiện lợi)
    ```php
        php artisan ser
        php artisan serve
    ```
    +   Đây là lệnh do **laravel** cung cấp sẵn thông qua **artisan**
    +   Nó tự động:
    +   Trỏ tới thư mục public (như cách ta cd vào public ở cách 1)
    +   Khởi động server PHP tích hợp (**php -S**)
    +   Chạy ở **localhost:8000**, nếu port chưa bị chiếm 
    +   Quản lý log và thông báo gọn gàng