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
}
