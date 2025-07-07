### Cấu trúc các thư mục của 1 dự án Laravel

-   Laravel xây dựng trên kiến trúc ``MVC (Model-View-Controller)``
-   Để hỗ trợ tốt nhất trong quá trình phát triển , Laravel còn có ``các thư mục khác`` như sau.

-  ``app/``
    +   Hiểu đơn giản là tất cả ``code chính`` trong project của chúng ta .
    +   Trong app có các folder như:
        +   ``Console``: Tất cả các câu ``lệnh`` của chúng ta chạy ở ``môi trường Command Line``
        +   ``Exceptions``: Chứa tất cả các file liên quan đến ``điều hướng lỗi`` (exceptions)
        +   ``Http``: Chứa 2 folder và rất nhiều file:
            +   ``Controller`` ``(Bộ điều khiển)``: 
                +   Hiểu đơn giản đây là ``bộ não giữ vai trò định hướng giữa người dùng và hệ thống``,
                    khi người dùng ``truy cập vào url(route)``, Laravel sẽ ``điều hướng đến phương thức trong controller``.

            +   ``Middleware`` ``(Bộ lọc request)``: 
                +   Hiểu đơn giản đây là 1 ``bộ lọc request (yêu cầu)``, nếu ``thoả mãn điều kiện``, request đó có thể tiếp tục đi, còn ``không thoả mãn`` thì dừng lại hoặc chuyển hướng sang 1 request khác.

        +   ``Models``: Xuất hiện ở Laravel 8, các phiên bản cũ khác dưới laravel 8 không có,
            chủ yếu chứa các ``Class Model (Bộ xử lý dữ liệu)``.

        +   ``Providers``: 
            +   Hiểu đơn giản đây là nơi ``chứa, khai báo các service (dịch vụ)`` và ``bind`` vào trong ``Service Container``.
            +   Hiểu một cách cơ bản Service Providers chính là ``trung tâm khởi tạo các ứng dụng`` của Laravel.
            +   Service Provider ``khởi động rất nhiều thành phần khác nhau trong core ``cũng như các ``package`` được cài thêm.

-   ``bootstrap``: 
    +   Hiểu đơn giản đây là ``file khởi động`` sau khi request bắt đầu được khởi chạy trên url bởi người dùng
    +   Đầu tiên sẽ chạy ở ``index.php`` trong ``public``, sau đó ``index.php gọi đến boostrap``, cái bootstrap giống như 1 file khởi động khi có request, ngoài file app.php còn có folder cache.

-   ``config``: 
    +   Thư mục config chứa rất nhiều các ``file config (tuỳ chỉnh)``, ví dụ như config app.php, config databse.php, session.php,...

-   ``database``: 
    +   Thư mục chứa 2 folder ``migration`` (tạo và thao tác với database) và ``seeds`` (tạo dữ liệu mẫu), đây là các folder hỗ trợ các class giúp xây dựng database
        +   ``factories``:  Thư mục chứa các file ``định nghĩa các cột bảng dữ liệu`` để ``tạo ra các dữ liệu mẫu``
        +   ``migrations``: Thư mục chứa các file ``tạo và chỉnh sửa dữ liệu``
        +   ``seeds``:      Thư mục chứa các file ``tạo dữ liệu thêm vào CSDL``

-   ``public``: 
    +   Đây là thư mục chứa file chạy chính là ``index.php``, nói cách khác đây là ``điểm khởi đầu của ứng dụng``
    +   Ngoài file index.php, ta còn có file .htaccess (trong trường hợp ta sử dụng Apache)


    +   Ở đây thay vì sử dụng Apache của .htaccess, ta dùng cách khác là ``php artisan ser`` để khởi chạy web,
        nhưng cách gọi này chỉ ``chạy trên localhost hay server cục bộ`` .

    +   Sau này muốn đẩy lên ``server thật (production)`` thì ta cần dùng ``Apache`` để thiết lập ``.htaccess``.
    +   Ngoài ra còn có ``nginx`` sử dụng ``nginx.conf``
    
    +   Quan trọng là phải cấu hình cho ``domain`` hoặc ``subdomain`` trỏ vào thư mục ``public``
    +   Ta dùng file này để viết lại ``URL(URL rewrite)``, chuyển tất cả request về ``index.php``

    +   ``robot.txt`` dùng để ``điều khiển trình thu thập dữ liệu (bots) ``
    +   ``web.config`` tương tự .htaccess, nhưng dùng cho ``IIS của Windows``, giúp r``ewrite URL và thiết lập quyền truy cập ứng dụng`` cho Laravel.
    
    +   Ngoài ra trong public còn có thể chứa ``folder assets như css, js`` để ``tích hợp vào phần giao diện frontend``
    +   ``public thiết lập chung cho nhiều trang``

-   ``resources``:  
    +   Đây là thư mục ``chứa các tài nguyên như css, js, và views để hiển thị`` (views trong View của mô hình MVC)
    +   Ngoài ra còn có folder ``lang``, tuỳ vào phiên bản Laravel
    +   ``resources thiết lập riêng cho 1 số trang tuỳ chỉnh`` 
        
-   ``routes``:
    +   Tất cả các file trong routes đều liên quan đến ``định tuyến``, tức là các ``URL sẽ điều hướng`` đến đâu đó trong trang ứng dụng
    +   File web.php là nơi ta viết code ``set route cho web, cụ thể là http ``
    +   File api.php là nơi ta viết code, ``setup route cho api, sau khi đến tên miền và trước khi đến route at sẽ có 1 tiền tố là api``
    +   VD: 
        ```php
        Route::get('/products', [ApiProductController::class, 'index']);
        ```
        Laravel hiểu là: http://localhost/api/products

    + Về cơ bản thì api.php giống web.php, chỉ thêm ``tiền tố api`` như ví dụ trên

    + Ngoài ra còn có ``console.php`` để ``định nghĩa các command``, ``channel.php`` để ``định nghĩa các trang phát sóng real-time``

-   ``storage``:
    +   Hiểu đơn giản đây là ``kho lưu trữ``
    +   Với ``app/public`` sẽ ``chứa tất cả các file được upload lên``
    +   Thư mục ``framework`` chứa các ``cache và session``
    +   Thư mục ``testing`` lưu trữ các ``file test``
    +   Thư mục ``views`` chứa ``cache views`` mỗi lần ta load sẽ tạo ra ``1 file php dạng hash``
    +   Các ``thay đổi`` hay ``lỗi`` sẽ được lưu vào  thư mục ``logs``

-   ``tests``: 
    +   Chứa các ``file kiểm thử``, l``ưu trữ các tính năng test`` để đảm bảo ứng dụng hoạt động đúng như mong muốn
    +   2 thư mục là ``Feature và Unit`` dùng để ``test toàn tính năng`` và ``test đơn vị``

-   ``vendor``: 
    +   Chứa tất cả những ``folder, file, class liên quan`` đến các`` thư viện bên thứ 3`` cũng như ``core(lõi,nhân)`` của Laravel
    +   Nếu mất hay chỉnh sửa gì mà bị lỗi, có thể chạy ``composer update``

-   ``.env``:
    +   Đây là ``file config .env`` ``cấu hình môi trường dự án``, nếu ta ``thay đổi các giá trị ở file .env`` này thì 
    các giá trị ta thay đổi sẽ được ``ghi đè lên các giá trị trong folder config/`` 

-   ``.env .example``:
    +   Hiểu đơn giản đây là ``file mẫu`` để ``copy giá trị từ file này sang file.env bị mất``
    +   Nếu ta clone 1 dự án không có file .env, ta có thể dùng lệnh như sau để tạo nhanh:
    ```cmd
        cp .env.example .env 
    ```
-   ``.gitignore``: 
    +   Đây là file ``cấu hình những thư mục và file`` không cần thiết sẽ không được đẩy lên Git
    +   Tránh việc đưa các file không cần thiết, bảo mật hoặc tự sinh (auto-genarate vào repo)

-   ``artisan``:
    +   Trong Laravel hỗ trợ chúng ta sẵn các ``command line`` trong việc ``xây dựng project thông qua artisan``
    +   VD: Xem các câu lệnh artisan
        ```php
        php artisan list
        ```
-   ``composer.json và composer.lock``:
    +   Composer tự sinh ra

-   ``package.json``:
    +   Danh sách các package do chúng ta ``tích hợp`` vào bằng cách sử dụng ``node`` hay ``npm``

-   ``phpunit.xml``:
    +   Đây là ``file cấu hình`` của ``UnitTest``

-   ``README.MD``:
    +   Thông tin mô tả dự án 1 cách tổng quan
    +   Khi push lên Github sẽ ``hiển thị đầu tiên trong trang repo``

-   ``vite.config.js``:
    +   Đây là file cấu hình cho ``Vite``, công cụ ``build front-end`` mặc định của Laravel 9+
    +   Dùng để g``ắn plugin``, ``cấu hình Assets(csss,js)``, ``gắn alias``, ``xử lý hot reload``.

-   ``webpack.mix.js``: (Laravel 8 đổ về):
    +   Là file c``ấu hình cho Laravel Mix``, công cụ ``build asset`` trước khi Laravel chuyển sang dùng Vite.

    +   Dùng để ``biên dịch các file front-end``như:
        +   SCSS, SASS, LESS → CSS
        +   ES6, JSX → JavaScript thuần
        +   Kết hợp nhiều file JS/CSS thành 1 file duy nhất
        +   Tự động nạp lại (hot reload), minify, mix, version hóa