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

5.  Bật chế độ bảo trì
```php
    php artisan down
```