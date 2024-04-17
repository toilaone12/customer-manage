<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AccountController extends Controller
{
    //
    public function login()
    {
        return view('admin.account.login');
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('id'));
        return redirect()->route('account.login');
    }

    public function signIn(Request $request)
    {
        $data = $request->all();
        $login = Account::where('tenDangNhap', $data['tenDangNhap'])->where('matKhau', md5($data['matKhau']))->first();
        if ($login) {
            Cookie::queue('id', $login->maTK);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('account.login')->with('noti', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function register()
    {
        return view('admin.account.register');
    }

    public function registerIn(Request $request)
    {
        $data = $request->all();
        $check = Account::where('tenDangNhap', $data['tenDangNhap'])->first();
        if (!$check) {
            if ($data['kiemTraMatKhau'] == $data['matKhau']) {
                $array = [
                    'tenDangNhap' => $data['tenDangNhap'],
                    'matKhau' => md5($data['matKhau']),
                    'hoTen' => 'UID-' . rand(0, 999999),
                ];
                $insert = Account::create($array);
                if ($insert) {
                    return redirect()->route('account.register')->with('noti', '<p class="card-description text-success">Đăng ký thành công</p>');
                } else {
                    return redirect()->route('account.register')->with('noti', '<p class="card-description text-danger">Đăng ký thất bại</p>');
                }
            } else {
                return redirect()->route('account.register')->with('noti', '<p class="card-description text-danger">Mật khẩu không trùng khớp</p>');
            }
        } else {
            return redirect()->route('account.register')->with('noti', '<p class="card-description text-danger">Tài khoản này đã tồn tại</p>');
        }
    }

    public function forget()
    {
        return view('admin.account.forget');
    }

    public function edit()
    {
        $id = Cookie::get('id');
        $account = Account::find($id);
        return view('admin.account.edit', compact('account'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if ($data['kiemTraMatKhau'] == $data['matKhau']) {
            $account = Account::where('tenDangNhap', $data['tenDangNhap'])->first();
            if ($account) {
                if (!isset($data['hoTen'])) { //doi mat khau
                    $account->matKhau = md5($data['matKhau']);
                    $update = $account->save();
                    if ($update) {
                        return redirect()->route('account.forget')->with('noti', '<p class="card-description text-success">Đổi mật khẩu thành công</p>');
                    } else {
                        return redirect()->route('account.forget')->with('noti', '<p class="card-description text-danger">Đổi mật khẩu thất bại</p>');
                    }
                } else { //doi thong tin ca nhan
                    unset($data['tenDangNhap']);
                    $account->hoTen = $data['hoTen'];
                    $account->matKhau = md5($data['matKhau']);
                    $update = $account->save();
                    if ($update) {
                        return redirect()->route('account.edit')->with('noti', '<p class="card-description text-success">Đổi thông tin thành công</p>');
                    } else {
                        return redirect()->route('account.edit')->with('noti', '<p class="card-description text-danger">Đổi thông tin thất bại</p>');
                    }
                }
            } else {
                return redirect()->route('account.forget')->with('noti', '<p class="card-description text-danger">Tài khoản này không tồn tại</p>');
            }
        } else {
            if (!isset($data['hoTen'])) { //doi mat khau
                return redirect()->route('account.forget')->with('noti', '<p class="card-description text-danger">Mật khẩu không trùng khớp</p>');
            }else{ //doi thong tin ca nhan
                return redirect()->route('account.edit')->with('noti', '<p class="card-description text-danger">Mật khẩu không trùng khớp</p>');
            }
        }
    }
}
