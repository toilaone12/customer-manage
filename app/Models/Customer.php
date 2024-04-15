<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = "customer";
    protected $primaryKey = "idKH";
    protected $fillable = ["maKH","tenKH",'phanLoai','diaChi',"soDienThoai","email","maSoThue","nguoiLienHe","moTa","yeuCau"];
}
