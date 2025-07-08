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

-   Cấu hình 2 folder:
    +   bootstrap như cache và các file, ta cần phải phân quyền ghi
    +   storage: kho lưu trữ có các file và folder cần ghi, với public là nơi lưu trữ file, ảnh cho users uploads, ngoài ra còn có logs, cache, session,...   

-   Trong Laravel, khi ta khởi chạy 1 app (ứng dụng) thì cần có ``key``, cụ thể là ``APP_KEY``, nếu không có, app sẽ không chạy được .

-   Laravel sẽ báo lỗi ``No application encryption key has been specified``.
-   Có 2 cách khắc phục lỗi này
    +   C1: Sử dụng luôn ``Generate app key`` sẵn của Laravel trong màn hình Debug
    +   C2: Sử dụng lệnh ``php artisan key:generate`` trogn terminal của vscode để generate ra key trong APP_KEY
-   Lưu ý: phải có APP_KEY=, sau đó dùng 1 trong 2 cách mới không bị lỗi đỏ như ảnh.
-   Màn hình hiển thị giao diện debug khá đẹp do đang ở chế độ ``DEBUG``, cụ thể là ``APP_DEBUG=true``
-   Nếu ta đặt thành ``APP_DEBUG=false``, ta sẽ không thấy giao diện đó mà chỉ thấy thông báo ``500 | server error``
