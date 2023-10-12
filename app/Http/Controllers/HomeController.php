<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        // Hiển thị form login
        return view('login');
    }
    public function check_login(Request $req)
    {
        // Khai báo các quy ràng buộc xác thực
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        // customize các tin nhắn
        $message = [
            'email.required' => 'Địa chỉ email không được để trống',
            'email.email' => 'Địa chỉ email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống'
        ];
        // nếu Các ràng buộc đã hợp lệ, thì xử lý tiếp
        $req->validate($rules, $message);
    }

}