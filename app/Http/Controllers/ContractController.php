<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    //
    public function list(){
        $title = "Danh sách hợp đồng";
        $list = Contract::all();
        return view('admin.contract.list',compact('title','list'));
    }

    public function insert(){
        $title = "Thêm hợp đồng";
        return view('admin.contract.insert',compact('title'));
    }

    public function add(Request $request){
        $data = $request->all();
        $check = Contract::where('tenHD',$data['tenHD'])->first();
        if(!$check){
            unset($data['_token']);
            $insert = Contract::create($data);
            if($insert){
                return redirect()->route('contract.insert')->with('noti','Thêm thành công thông tin hợp đồng');
            }
        }else{
            return redirect()->route('contract.insert')->with('noti','Tên hợp đồng đã bị trùng');
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $title = "Sửa hợp đồng";
        $contract = Contract::find($id);
        return view('admin.contract.edit',compact('title','contract'));
    }

    public function update(Request $request){
        $data = $request->all();
        $id = $request->get('id');
        $contract = Contract::find($id);
        $contract->tenHD = $data['tenHD'];
        $contract->ngayLap = $data['ngayLap'];
        $contract->dieuKhoan = $data['dieuKhoan'];
        $update = $contract->save();
        if($update){
            return redirect()->route('contract.edit',['id' => $id])->with('noti','Sửa thành công thông tin hợp đồng');
        }else{
            return redirect()->route('contract.edit',['id' => $id])->with('noti','Sửa không thành công thông tin hợp đồng');
        }
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $contract = Contract::find($id);
        $delete = $contract->delete();
        if($delete){
            return response(['res' => 'success', 'title' => 'Xoá thông tin hợp đồng', 'icon' => 'success', 'text' => 'Xóa thông tin hợp đồng thành công'],200);
        }else{
            return response(['res' => 'error', 'title' => 'Xoá thông tin hợp đồng', 'error' => 'success', 'text' => 'Xóa thông tin hợp đồng không thành công'],200);
        }
    }
}
