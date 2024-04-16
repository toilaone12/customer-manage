<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $title = 'Trang chủ';
        $id = Cookie::get('id');
        if(isset($id) && $id){
            $admin = Admin::find($id);
            $chuCaiDauTien = explode(' ',$admin->hoTen);
            $chuCaiDauTien = end($chuCaiDauTien);
            $chuCaiDauTien = mb_substr($chuCaiDauTien,0,1,'UTF-8');
            return view('admin.content',compact('title','admin','chuCaiDauTien'));
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function login(){
        return view('admin.login');
    }

    public function logout(){
        Cookie::queue(Cookie::forget('id'));
        return redirect()->route('admin.login');

    }

    public function signIn(Request $request){
        $data = $request->all();
        $login = Admin::where('tenDangNhap',$data['tenDangNhap'])->where('matKhau',md5($data['matKhau']))->first();
        if($login){
            Cookie::queue('id',$login->maTK);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->with('noti','Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
