<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietxuatkho extends Model
{
    public    $timestamps   = false;
    protected $table        = 'chitietxuatkho';
    protected $fillable     = ['ctxk_soLuong', 'km_giaTri', 'ctxk_thanhtien'];
    protected $guarded      = ['sp_ma', 'xk_ma', 'kho_ma'];
    protected $primaryKey   = ['sp_ma', 'xk_ma', 'kho_ma'];
    public    $incrementing = false;
    public function khos()
    {
        return $this->belongsTo('App\Khohang', 'kho_ma', 'kho_ma');
    }
    public function sanpham1s()
    {
        return $this->belongsTo('App\SanPham', 'sp_ma', 'sp_ma');
    }
    public function xuatkhos()
    {
        return $this->belongsTo('App\Xuatkho', 'xk_ma', 'xk_ma');
    }
}
