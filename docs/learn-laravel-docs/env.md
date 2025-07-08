### .env trong thư mục dự án Laravel
-   Đây là file thiết lập, cấu hình môi trường
-   .env (viết tắt của "environment") là file cấu hình môi trường trong Laravel, dùng để thiết lập các thông số quan trọng như:

-   Cấu trúc cơ bản của file .env
```env
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:uZjQ...U2yM=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ten_db
    DB_USERNAME=root
    DB_PASSWORD=

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120
```

###   Ý nghĩa một số dòng phổ biến
```md
-   Dòng	
    +   Ý nghĩa
-   APP_NAME	
    +   Tên ứng dụng
-   APP_ENV	    
    +   Môi trường đang chạy (local, production, staging, ...)
-   APP_KEY	    
    +   Khóa bảo mật (Laravel sẽ mã hóa session, cookie...)
-   APP_DEBUG	
    +   Bật/tắt debug (hiện lỗi chi tiết khi true)
-   APP_URL	    
    +   Địa chỉ URL 
-   ...
    +   ...
```

###   Kết nối CSDL
```env
    DB_CONNECTION=mysql        # Loại CSDL
    DB_HOST=127.0.0.1          # Địa chỉ máy chủ CSDL
    DB_PORT=3306               # Cổng kết nối
    DB_DATABASE=laravel_app    # Tên DB
    DB_USERNAME=root           # Tên đăng nhập
    DB_PASSWORD=               # Mật khẩu
```

###  Mẹo:
-   Không bao giờ push file .env lên GitHub → chứa thông tin nhạy cảm!

-   Dùng .env.example để chia sẻ cấu trúc mẫu.

-   Có thể truy cập giá trị .env trong code Laravel bằng:

```php
env('APP_NAME'); // Hoặc dùng config('app.name') trong production
```