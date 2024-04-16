<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function list(){
        $title = "Danh sách hồ sơ thanh toán";
        $list = Profile::all();
        return view('admin.profile.list',compact('title','list'));
    }

    public function insert(){
        $title = "Thêm hồ sơ thanh toán";
        return view('admin.profile.insert',compact('title'));
    }

    public function add(Request $request){
        $data = $request->all();
        $check = Profile::where('loaiHS',$data['loaiHS'])->first();
        if(!$check){
            unset($data['_token']);
            $data['soTien'] = str_replace('.','',$data['soTien']);
            // dd($data);
            $insert = Profile::create($data);
            if($insert){
                return redirect()->route('profile.insert')->with('noti','Thêm thành công thông tin hồ sơ thanh toán');
            }
        }else{
            return redirect()->route('profile.insert')->with('noti','Tên hồ sơ thanh toán đã bị trùng');
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $title = "Sửa hồ sơ thanh toán";
        $profile = Profile::find($id);
        // dd($profile);
        return view('admin.profile.edit',compact('title','profile'));
    }

    public function update(Request $request){
        $data = $request->all();
        $id = $request->get('id');
        $profile = Profile::find($id);
        $profile->loaiHS = $data['loaiHS'];
        $profile->ngayLap = $data['ngayLap'];
        $profile->noiDung = $data['noiDung'];
        $profile->canCu = $data['canCu'];
        $profile->soTien = str_replace('.','',$data['soTien']);
        $profile->thoiHanThanhToan = $data['thoiHanThanhToan'];
        $profile->hinhThucThanhToan = $data['hinhThucThanhToan'];
        $update = $profile->save();
        if($update){
            return redirect()->route('profile.edit',['id' => $id])->with('noti','Sửa thành công thông tin hồ sơ thanh toán');
        }else{
            return redirect()->route('profile.edit',['id' => $id])->with('noti','Sửa không thành công thông tin hồ sơ thanh toán');
        }
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $profile = Profile::find($id);
        $delete = $profile->delete();
        if($delete){
            return response(['res' => 'success', 'title' => 'Xoá thông tin hồ sơ thanh toán', 'icon' => 'success', 'text' => 'Xóa thông tin hồ sơ thanh toán thành công'],200);
        }else{
            return response(['res' => 'error', 'title' => 'Xoá thông tin hồ sơ thanh toán', 'error' => 'success', 'text' => 'Xóa thông tin hồ sơ thanh toán không thành công'],200);
        }
    }
}
