<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietnhapkho extends Model
{
    public    $timestamps   = false;
    protected $table        = 'chitietnhapkho';
    protected $fillable     = ['ctnk_soLuong', 'km_giaTri', 'ctnk_thanhtien'];
    protected $guarded      = ['sp_ten', 'nk_ma', 'kho_ma'];
    protected $primaryKey   = ['sp_ten', 'nk_ma', 'kho_ma'];
    public    $incrementing = false;

    public function khos()
    {
        return $this->belongsTo('App\Khohang', 'kho_ma', 'kho_ma');
    }
    public function sanpham1s()
    {
        return $this->belongsTo('App\SanPham', 'sp_ten', 'sp_ma');
    }
    public function nhapkhos()
    {
        return $this->belongsTo('App\Nhapkho', 'nk_ma', 'nk_ma');
    }
}
