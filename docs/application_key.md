1.  Tạo Application Key:
```php
    php artisan key:generate
```

2.  Thiết lập Timezone
-   => config/app.php   
    +   'timezone' => 'UTC',
    +   'timezone' => 'Asia/Ho_Chi_Minh'

3. Thiết lập môi trường .env
-   VD: Xây dựng chức năng thanh toán Paypal
-   ``=> .env => local => Call api sandbox``: làm chức năng ``thanh toán bằng tiền giả`` trong sandbox, không phải tiền thật => sử dụng được ở local với ``APP_ENV=local``

-   ``=> .env => production => Call Api live``: làm ``chức năng thanh toán bằng thẻ hay tiền thật``,cần tài khoản thật
=> sử dụng ở môi trường production với ``APP_ENV=production``

- Sau khi đổi cờ từ ``local sang production``, ta cần khởi động lại server

-   Sử dụng câu lệnh
```php
    php artisan env
```
-   => Lệnh này giúp kiểm tra môi trường hoạt động của ứng dụng Laravel

4.  Thiết lập CSDL
-   => .env
-   Sử dụng phpmyadmin và laragon hoặc xampp (windows), ampps (macos) để tạo CSDL
-   Chạy migrations để tạo các bảng dữ liệu, cụ thể là tạo ra các table users ở trong DB.
-   Tạo xong CSDL cần thiết lập trong .env hoặc config/database.php
```php
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=learnlaravel
    DB_USERNAME=root
    DB_PASSWORD=
```
-   Sửa đổi các giá trị trong .env để thiết lập db gồm driver kết nối CSDL, host, port, tên database
-   Nếu chưa có bảng thiết lập giống tên của ``DB_DATABASE`` tồn tại trên phpmyadmin, khi chạy lệnh:
```php
    php artisan migrate
```
-   Sẽ tạo ra bảng với tên giống ``DB_DATABASE`` tương ứng
-   Nếu gặp lỗi thay đổi tên db mà chạy lệnh migrate chi ra 1 tên bảng mặc định, mặc dù ta có sửa ``DB_DATABASE`` ở .env
-   Thì chạy lệnh:
```php
    php artisan config:cache
```
-   Lệnh này sẽ tăng tốc Laravel bằng cách ``cache`` tạo bản sao lưu, lưu sẵn nội dung đã xử lý (.env), gộp lại toàn bộ file cấu hình (config/*.php) thành một file PHP duy nhất và tăng tốc để chạy nhanh hơn => Laravel không phải đọc từng file cấu hình nhỏ nữa.

-   Ví dụ thực tế:
    +   File .env:
    ```php
    APP_NAME=MyApp
    APP_ENV=production
    APP_DEBUG=false
    DB_DATABASE=my_db
    ```
    +   File config/app.php:

    ```php
    return [
        'name' => env('APP_NAME', 'Laravel'),
        'env' => env('APP_ENV', 'local'),
        'debug' => env('APP_DEBUG', false),
    ];
    ```

-   Bình thường (khi chưa config:cache):
-   Mỗi lần Laravel chạy (ví dụ: mở trang web), nó phải:
    +   Đọc .env
    +   Đọc từng file config/*.php

-   => Dùng env() để lấy giá trị
-   => Tốn thời gian, đặc biệt với nhiều request.

-   Sau khi chạy:
    ```php
        php artisan config:cache
    ```
-   Laravel sẽ:
-   Đọc hết tất cả giá trị trong .env
-   Gộp toàn bộ config/*.php thành 1 file duy nhất:
-   => bootstrap/cache/config.php
-   Laravel sau đó chỉ cần load file đó, cực nhanh

-  Minh hoạ kết quả
### Trước: 
```php
    config/app.php
    'name' => env('APP_NAME', 'Laravel'), // Laravel sẽ đọc từng lần
```

### Sau:
-   Sau khi config:cache:
-   Laravel không cần env() nữa, vì đã thay sẵn thành:

```php
'name' => 'MyApp',
'env' => 'production',
'debug' => false,
//Laravel chỉ cần load đúng 1 file config.php, không đụng đến .env nữa.
```
-   Lưu ý:
    +   Sau khi config:cache, các lệnh như env('APP_NAME') sẽ không hoạt động đúng nữa trong controller, blade...
    +   Chỉ config('app.name') mới chính xác.

5.  Bật chế độ bảo trì
```php
    php artisan down
```

-   Sử dụng câu lệnh này để bật ``chế độ bảo trì``
-   Vào resources/views/ => Tạo folder errors chứa file hiển thị lỗi bằng blade
-   Cụ thể: ``cd resources/views => mkdir errors => NewItem 503.blade.php -ItemType File``