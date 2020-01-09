<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khohang extends Model
{
    public    $timestamps   = false;
    protected $table        = 'khohang';
    protected $fillable     = ['kho_ten', 'kho_lienHe', 'kho_diaChi', 'kho_dienThoai', 'kho_quanLy', 'kho_ghiChu'];
    protected $guarded      = ['kho_ma'];
    protected $primaryKey   = ['Kho_ma'];
}
