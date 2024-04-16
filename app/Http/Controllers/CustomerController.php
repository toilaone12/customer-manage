<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    //
    public function list(){
        $title = "Danh sách khách hàng";
        $list = Customer::all();
        return view('admin.customer.list',compact('title','list'));
    }

    public function insert(){
        $title = "Thêm khách hàng";
        return view('admin.customer.insert',compact('title'));
    }

    public function add(Request $request){
        $data = $request->all();
        Validator::make($data,[
            'maKH' => ['required'],
            'tenKH' => ['required'],
            'phanLoai' => ['required'],
            'soDienThoai' => ['required', 'regex: /^(03[2-9]|05[6-9]|07[06-9]|08[1-9]|09[0-9]|01[2-9])[0-9]{7}$/'],
            'email' => ['required'],
            'maSoThue' => ['required'],
            'nguoiLienHe' => ['required'],
            'moTa' => ['required'],
            'yeuCau' => ['required'],
        ],[
            'maKH.required' => 'Mã khách hàng buộc phải điền vào',
            'tenKH.required' => 'Họ và tên bắt buộc phải điền vào',
            'soDienThoai.required' => 'Số điện thoại bắt buộc phải điền vào',
            'soDienThoai.regex' => 'Số điện thoại phải nằm trong phạm vi Việt Nam',
            'soDienThoai.required' => 'Số điện thoại bắt buộc phải điền vào',
            'email.required' => 'Email bắt buộc phải điền vào',
            'maSoThue.required' => 'Mã số thuế bắt buộc phải điền vào',
            'nguoiLienHe.required' => 'Người liên hệ bắt buộc phải điền vào',
            'moTa.required' => 'Mô tả bắt buộc phải điền vào',
            'yeuCau.required' => 'Yêu cầu bắt buộc phải điền vào',
        ])->validate();
        unset($data['_token']);
        $insert = Customer::create($data);
        if($insert){
            return redirect()->route('customer.insert')->with('noti','Thêm thành công thông tin khách hàng');
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $title = "Sửa khách hàng";
        $customer = Customer::find($id);
        return view('admin.customer.edit',compact('title','customer'));
    }

    public function update(Request $request){
        $data = $request->all();
        $id = $request->get('id');
        $customer = Customer::find($id);
        Validator::make($data,[
            'maKH' => ['required'],
            'tenKH' => ['required'],
            'phanLoai' => ['required'],
            'soDienThoai' => ['required', 'regex: /^(03[2-9]|05[6-9]|07[06-9]|08[1-9]|09[0-9]|01[2-9])[0-9]{7}$/'],
            'email' => ['required'],
            'maSoThue' => ['required'],
            'nguoiLienHe' => ['required'],
            'moTa' => ['required'],
            'yeuCau' => ['required'],
        ],[
            'maKH.required' => 'Mã khách hàng buộc phải điền vào',
            'tenKH.required' => 'Họ và tên bắt buộc phải điền vào',
            'soDienThoai.required' => 'Số điện thoại bắt buộc phải điền vào',
            'soDienThoai.regex' => 'Số điện thoại phải nằm trong phạm vi Việt Nam',
            'soDienThoai.required' => 'Số điện thoại bắt buộc phải điền vào',
            'email.required' => 'Email bắt buộc phải điền vào',
            'maSoThue.required' => 'Mã số thuế bắt buộc phải điền vào',
            'nguoiLienHe.required' => 'Người liên hệ bắt buộc phải điền vào',
            'moTa.required' => 'Mô tả bắt buộc phải điền vào',
            'yeuCau.required' => 'Yêu cầu bắt buộc phải điền vào',
        ])->validate();
        $customer->maKH = $data['maKH'];
        $customer->tenKH = $data['tenKH'];
        $customer->phanLoai = $data['phanLoai'];
        $customer->diaChi = $data['diaChi'];
        $customer->soDienThoai = $data['soDienThoai'];
        $customer->email = $data['email'];
        $customer->maSoThue = $data['maSoThue'];
        $customer->nguoiLienHe = $data['nguoiLienHe'];
        $customer->moTa = $data['moTa'];
        $customer->yeuCau = $data['yeuCau'];
        $update = $customer->save();
        if($update){
            return redirect()->route('customer.edit')->with('noti','Sửa thành công thông tin khách hàng');
        }
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $customer = Customer::find($id);
        $delete = $customer->delete();
        if($delete){
            return response(['res' => 'success', 'title' => 'Xoá thông tin khách hàng', 'icon' => 'success', 'text' => 'Xóa thông tin khách hàng thành công'],200);
        }else{
            return response(['res' => 'error', 'title' => 'Xoá thông tin khách hàng', 'error' => 'success', 'text' => 'Xóa thông tin khách hàng không thành công'],200);
        }
    }
}
