<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Profile;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    public function list(){
        $title = "Danh sách báo giá";
        $list = Quote::all();
        $listCustomer = Customer::select('maKH', 'tenKH')->get();
        return view('admin.quote.list',compact('title','list','listCustomer'));
    }

    public function insert(){
        $title = "Thêm báo giá";
        $listCustomer = Customer::select('maKH', 'tenKH')->get();
        return view('admin.quote.insert',compact('title','listCustomer'));
    }

    public function add(Request $request){
        $data = $request->all();
        $check = Quote::where('tenBG',$data['tenBG'])->first();
        if(!$check){
            unset($data['_token']);
            $insert = Quote::create($data);
            if($insert){
                return redirect()->route('quote.insert')->with('noti','Thêm thành công thông tin báo giá');
            }
        }else{
            return redirect()->route('quote.insert')->with('noti','Tên báo giá đã bị trùng');
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $title = "Sửa báo giá";
        $quote = Quote::find($id);
        $listCustomer = Customer::select('maKH', 'tenKH')->get();
        return view('admin.quote.edit',compact('title','quote','listCustomer'));
    }

    public function update(Request $request){
        $data = $request->all();
        $id = $request->get('id');
        $quote = Quote::find($id);
        $quote->maKH = $data['maKH'];
        $quote->tenBG = $data['tenBG'];
        $quote->mucTieu = $data['mucTieu'];
        $quote->phamViApDung = $data['phamViApDung'];
        $quote->ngayLap = $data['ngayLap'];
        $quote->thoiHanApDung = $data['thoiHanApDung'];
        $quote->phuLuc = $data['phuLuc'];
        $update = $quote->save();
        if($update){
            return redirect()->route('quote.edit',['id' => $id])->with('noti','Sửa thành công thông tin báo giá');
        }else{
            return redirect()->route('quote.edit',['id' => $id])->with('noti','Sửa không thành công thông tin báo giá');
        }
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $quote = Quote::find($id);
        if($quote){
            $listContract = Contract::where('maBG',$id)->get();
            if($listContract){
                foreach($listContract as $key => $contract){
                    $listPayment = Payment::where('maHD',$contract->maHD)->get();
                    if($listPayment){
                        foreach($listPayment as $key => $payment){
                            $payment->delete();
                        }
                        $contract->delete();
                    }else{
                        $contract->delete();
                    }
                }
            }
            $delete = $quote->delete();
            if($delete){
                return response(['res' => 'success', 'title' => 'Xoá thông tin báo giá', 'icon' => 'success', 'text' => 'Xóa thông tin báo giá thành công'],200);
            }else{
                return response(['res' => 'error', 'title' => 'Xoá thông tin báo giá', 'error' => 'success', 'text' => 'Xóa thông tin báo giá không thành công'],200);
            }
        }
    }
}
