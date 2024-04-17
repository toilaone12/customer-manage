<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = "contract";
    protected $primaryKey = "maHD";
    protected $fillable = ["tenHD",'ngayLap','dieuKhoan',"maBG"];
}
