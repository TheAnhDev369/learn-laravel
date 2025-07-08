1.  Tạo Application Key:
```php
    php artisan key:generate
```

2.  Thiết lập Timezone
-   => config/app.php   
    +   'timezone' => 'UTC',
    +   'timezone' => 'Asia/Ho_Chi_Minh'

3. Thiết lập môi trường .env
-   => .env

4.  Thiết lập CSDL
-   => .env

5.  Bật chế độ bảo trì
```php
    php artisan down
```