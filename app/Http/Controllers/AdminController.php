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
        return view('admin.content',compact('title'));
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

    public function register(){
        return view('admin.register');
    }

    public function registerIn(Request $request){
        $data = $request->all();
        $check = Admin::where('tenDangNhap',$data['tenDangNhap'])->first();
        if(!$check){
            if($data['kiemTraMatKhau'] == $data['matKhau']){
                $array = [
                    'tenDangNhap' => $data['tenDangNhap'],
                    'matKhau' => md5($data['matKhau']),
                    'hoTen' => 'UID-'.rand(0,999999),
                ];
                $insert = Admin::create($array);
                if($insert){
                    return redirect()->route('admin.register')->with('noti','<p class="card-description text-success">Đăng ký thành công</p>');
                }else{
                    return redirect()->route('admin.register')->with('noti','<p class="card-description text-danger">Đăng ký thất bại</p>');
                }
            }else{
                return redirect()->route('admin.register')->with('noti','<p class="card-description text-danger">Mật khẩu không trùng khớp</p>');
            }
        }else{
            return redirect()->route('admin.register')->with('noti','<p class="card-description text-danger">Tài khoản này đã tồn tại</p>');
        }
    }

    public function forget(){
        return view('admin.forget');
    }

    public function updatePassword(Request $request){
        $data = $request->all();
        if(!isset($data['hoTen'])){
            $admin = Admin::where('tenDangNhap',$data['tenDangNhap'])->first();
            if($admin){
                if($data['kiemTraMatKhau'] == $data['matKhau']){
                    $admin->matKhau = md5($data['matKhau']);
                    $update = $admin->save();
                    if($update){
                        return redirect()->route('admin.forget')->with('noti','<p class="card-description text-success">Đổi mật khẩu thành công</p>');
                    }else{
                        return redirect()->route('admin.forget')->with('noti','<p class="card-description text-danger">Đổi mật khẩu thất bại</p>');
                    }
                }else{
                    return redirect()->route('admin.forget')->with('noti','<p class="card-description text-danger">Mật khẩu không trùng khớp</p>');
                }
            }else{
                return redirect()->route('admin.forget')->with('noti','<p class="card-description text-danger">Tài khoản này không tồn tại</p>');
            }
        }else{

        }
    }
}
