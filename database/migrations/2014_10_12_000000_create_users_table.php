<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //  Tạo cấu trúc, lưu lại lịch sử như các sự thay đổi, tạo ra hay xoá đi, cập nhật như thế nào để sau này có thể quay lại sửa đổi tiếp
    //  Hiểu đơn giản migrations như là git của database, khi có ai đó nhỡ xoá bảng hay dữ liệu của bảng, 
    //  ta có thể sử dụng bản sao lưu này để back lại dữ liệu cần thiết
    //  Tất cả mọi thứ sẽ được ghi lại trong migrations.
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
