<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list(){
        $title = "Danh sách hồ sơ thanh toán";
        $list = Payment::all();
        $listContract = Contract::select('maHD','tenHD')->get();
        return view('admin.payment.list',compact('title','list','listContract'));
    }

    public function insert(){
        $title = "Thêm hồ sơ thanh toán";
        $listContract = Contract::select('maHD','tenHD')->get();
        return view('admin.payment.insert',compact('title','listContract'));
    }

    public function add(Request $request){
        $data = $request->all();
        $check = Payment::where('loaiHS',$data['loaiHS'])->first();
        if(!$check){
            unset($data['_token']);
            $data['soTien'] = str_replace('.','',$data['soTien']);
            $insert = Payment::create($data);
            if($insert){
                return redirect()->route('payment.insert')->with('noti','Thêm thành công thông tin hồ sơ thanh toán');
            }
        }else{
            return redirect()->route('payment.insert')->with('noti','Loại hồ sơ thanh toán đã bị trùng');
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $title = "Sửa hồ sơ thanh toán";
        $payment = Payment::find($id);
        $listContract = Contract::select('maHD','tenHD')->get();
        return view('admin.payment.edit',compact('title','payment','listContract'));
    }

    public function update(Request $request){
        $data = $request->all();
        $id = $request->get('id');
        $payment = Payment::find($id);
        $payment->maHD = $data['maHD'];
        $payment->loaiHS = $data['loaiHS'];
        $payment->ngayLap = $data['ngayLap'];
        $payment->noiDung = $data['noiDung'];
        $payment->canCu = $data['canCu'];
        $payment->soTien = str_replace('.','',$data['soTien']);
        $payment->thoiHanThanhToan = $data['thoiHanThanhToan'];
        $payment->hinhThucThanhToan = $data['hinhThucThanhToan'];
        $update = $payment->save();
        if($update){
            return redirect()->route('payment.edit',['id' => $id])->with('noti','Sửa thành công thông tin hồ sơ thanh toán');
        }else{
            return redirect()->route('payment.edit',['id' => $id])->with('noti','Sửa không thành công thông tin hồ sơ thanh toán');
        }
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $payment = Payment::find($id);
        $delete = $payment->delete();
        if($delete){
            return response(['res' => 'success', 'title' => 'Xoá thông tin hồ sơ thanh toán', 'icon' => 'success', 'text' => 'Xóa thông tin hồ sơ thanh toán thành công'],200);
        }else{
            return response(['res' => 'error', 'title' => 'Xoá thông tin hồ sơ thanh toán', 'error' => 'success', 'text' => 'Xóa thông tin hồ sơ thanh toán không thành công'],200);
        }
    }
}
