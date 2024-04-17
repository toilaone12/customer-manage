<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = "payment";
    protected $primaryKey = "maHSTT";
    protected $fillable = ["loaiHS",'ngayLap','noiDung','canCu','soTien','thoiHanThanhToan','hinhThucThanhToan','maHD'];
}
