<h1 style="text-align: center;">Học lập trình Laravel tại Unicode</h1>
<?php
    echo date('Y-m-d H:i:s') . '<br/>';
    // echo date2('Y-m-d H:i:s');//    Lỗi Call to undefined function date2()
    /**
     * Nếu đẩy lên server mà để thông báo sẽ lộ đường dẫn, khách hàng sẽ nhìn thấy lỗi và liên quan đến vấn đề bảo mật
     * Sử dụng APP_DEBUG=false để hiển thị lỗi chung chung
     * Tất cả các lỗi sẽ được lưu trữ ở storage/log,...
     */

    // Thời gian sai:  2025-07-08 08:52:55
    // Thời gian đúng: 2025-07-08 15:53:50

    /**
     * Sửa từ   'timezone' => 'UTC',
     * sang     'timezone' => 'Asia/Ho_Chi_Minh',
     */

    // Thời gian đúng mới: 2025-07-08 16:01:41

    // echo env('APP_ENV');
    /**
     * Hiển thị local trong khi môi trường từ .env là production, có thể do cache
     * Lấy giá trị trực tiếp từ .env
     * Thời điểm hoạt động: Chỉ dùng đúng lúc Laravel khởi động boot
     * Sau khi chạy config:cache    Không còn hoạt động đúng
     * Dùng ở đâu ?    Chỉ nên dùng trong config/*.php
     */

    // echo config('app.env'); //   Hiển thị đúng production
    /**
     * Lấy giá trị từ file cấu hình trong config/app.php
     * An toàn khi dùng runtime (kể cả trong view, controller)
     * Luôn hoạt động chính xác sau khi chạy config:cache
     *     Dùng ở mọi nơi khác (controller, route, blade...)
     */

    // if (env('APP_ENV') == 'production')
    // {
    //     echo "Call API LIVE";
    // } else {
    //     echo "Call API Sandbox";
    // }
    if (config('app.env') === 'production') {
    echo "Call API LIVE";
    } else {
        echo "Call API Sandbox";
    }
  

?>