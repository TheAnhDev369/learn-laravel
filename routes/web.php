<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return view('home');
});

// Tạo Route mới
Route::get('/unicode', function() {
    return view('home');
});

Route::get('/san-pham', function() {
    return view('product');
    //  Lưu ý: chỉ lấy tên của các file trước .blade.php khi return view('')
    //  Ví dụ trong thư mục views có home.blade.php, welcome.blade.php,..
    //  Thì ta lấy home, welcome,... cho vào trong return view('welcome'), view('welcome),..
    //  Tránh dùng sai như sau: returm view('home.blade') hay return view('welcome.blade.php'),...
});