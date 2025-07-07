<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //  HomeController extends (kế thừa) lớp Controller gốc
    //
    //  Các phương thức như index, show, create, store, edit, update, destroy
    //  Tên Controller ứng với tên module, tức là tên controller được đặt theo đúng chức năng(module) mà nó xử lý
    //  Action là các phương thức có các chức năng, mỗi Action đại diện cho 1 chức năng cụ thể trong controller đó
    public function index()
    {
        return view('home');
    }
}
