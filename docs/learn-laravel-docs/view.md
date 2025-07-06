### Thư mục resources/views trong Laravel
-   Thư mục resources/views là nơi chứa toàn bộ giao diện (HTML) của ứng dụng Laravel — được viết bằng Blad. 
-   Đây là engine template mạnh mẽ và thân thiện của Laravel.

-   Cấu trúc cơ bản
```md
resources/
└── views/
    ├── welcome.blade.php
    ├── layouts/
    │   └── app.blade.php
    ├── auth/
    │   ├── login.blade.php
    │   └── register.blade.php
    └── home.blade.php
    └── welcome.blade.php
```
-   Các thành phần chính
-   Tên/thư mục	
    +   Mô tả
-   welcome.blade.php	
    +   Trang mặc định đầu tiên khi tạo Laravel
-   layouts/	
    +   Chứa layout chính (ví dụ: header, footer dùng chung)
-   auth/	
    +   Giao diện cho đăng nhập, đăng ký nếu dùng Laravel Breeze, Jetstream...
-   home.blade.php	
    +   Giao diện cho trang chủ hoặc dashboard
-   welcome.balde.php
    +   Giao diện trang chủ chào mừng của laravel khi mới khởi tạo project