### Request Cycle Laravel - Vòng Đời Request của Laravel
-   Đầu tiên chạy vào ``public/index.php``

-   Sau đó chạy đến ``bootstrap/app.php``

-   Tiếp đó chạy vào ``Kernal.php``, trong đó có chạy 3 cái là ``Http``, ``Console`` và ``Debug``
-   Trong file Kernal.php, ta thấy nó lọc rất nhiều thứ, hiểu đơn giản đây là tiền xử lý, 
    tức là trước khi request diễn ra hay trước khi đến bước xử lý request, thì phải thông qua Kernal này

-   Tiếp theo, sau khi xử lý xong thông qua Kernal, ta sẽ đến ``Service Providers`` (Trung tâm khởi động) chạy các service
-   VD: AppServiceProvider.php có ``register`` (đăng ký) , sau đó đến ``boot`` (khởi động)

-   Tiếp tục đến với folder routes hay ``Router (định tuyến)``, trước khi điều hướng đến Views hay Controllers cụ thể nào đó, ta sẽ phải thông qua ``Router``

-   Xong Router, ta sẽ đến với ``Middleware (Bộ Lọc Request)``, qua Middleware, nó sẽ lọc xem cái request đó có thoả mãn điều kiện hay không, nếu thoả mãn thì sẽ cho đi tiếp, còn không thoả mãn thì sẽ dừng lại hoặc chuyển hướng sang 1 cái khác

-   Sau đó ta đến tiếp với ``Controller/Action``, trong Controller, ta sẽ tạo ra các controller và ``extends (kế thừa)`` từ lớp Controllers 
-   VD: Tạo 1 lớp HomeController.php từ artisan:
    ```php
    php artisan make:controller HomeController.php
    ```

-   Xong Controller/Action, ta sẽ có các trường hợp như sau:
    +   1 là trả về ``views``, sau đó ``response (phản hồi cho client)``, cụ thể là những gì ta ``thấy trên trình duyệt`` (Browers)
    +   2 là trả luôn ra ``kết quả``, ví dụ như trong trường hợp ``viết API`` trả luôn ``JSON hoặc XML``

-   Trong Laravel, có những trường hợp trong 1 Router, `thay vì phải thông qua Middleware rồi đến Controller/Action`,
    ta có thể trả luôn về views.

-   Muốn ``biết 1 chức năng cụ thể`` , tất cả ``tác dụng`` của nó là gì, ta có thể ``lựa chọn Service Providers``
-   Hoặc muốn có bước ``tiền xử lý request``, ta có thể ``viết Kernal``.

-   Ta có ``Models load bên trong Controllers``, tuy nhiên ``Models`` ``không ảnh hưởng đến vòng đời Request`` mà chỉ liên quan đến ``xử lý CSDL``