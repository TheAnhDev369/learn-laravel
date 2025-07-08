### Thư mục app trong Laravel:
-   Trong Laravel, thư mục app/ là trái tim của ứng dụng — nơi chứa toàn bộ mã nguồn logic backend chính của dự án.

-  Cấu trúc thư mục app/
    +   Các thư mục phổ biến bên trong app/ và ý nghĩa của chúng:

```md
    -   Thư mục	
        +   Mục đích
    -   Console/	
        +   Chứa các lệnh Artisan do ta tạo ra, như **php artisan my:command**
    -   Exceptions/	
        +   Xử lý ngoại lệ (lỗi), đặc biệt là file **Handler.php**
    -   Http/
        +   Phần trung tâm của ứng dụng web: Controller, Middleware và Kernal.php
    -   Models/	
        +   Chứa các model tương tác với database (Eloquent ORM)
    -   Providers/	
        +   Các Service Provider khởi tạo các thành phần trong Laravel
```

-   Chi tiết hơn một số thư mục chính:
```md
    -   app/Http/
        +   Controllers/: chứa các controller (logic điều khiển flow request/response)
        +   Middleware/: chứa các middleware kiểm soát request (vd: auth, cors) 
        +   Kernel.php: cấu hình middleware toàn cục & nhóm

    -   app/Models/
        +   Nơi chứa các model đại diện cho bảng CSDL.
        +   Ví dụ: User.php, Post.php

    -   app/Console/Commands/
        +   Ta có thể tạo command bằng:
        +   php artisan make:command HelloWorld

    -   app/Providers/
        +   AppServiceProvider.php: nơi ta có thể đăng ký service hoặc binding
        +   RouteServiceProvider.php: định nghĩa các rule load route
        +   ...
```
```php
class User extends Authenticatable {
    protected $fillable = ['name', 'email'];
}
```

