<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Gopy extends Model
{
    public    $timestamps   = false;
    protected $table        = 'gopy';
    protected $fillable     = ['kh_ma', 'sp_ma', 'gy_thoiGian', 'gy_noiDung', 'gy_trangThai'];
    protected $guarded      = ['gy_ma'];
    protected $primaryKey   = 'gy_ma';
    protected $dates        = ['gy_thoiGian'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function sanpham()
    {
        return $this->belongsTo('App\SanPham', 'sp_ma', 'sp_ma');
    }   
    public function khachhang()
    {
        return $this->belongsTo('App\Khachhang', 'kh_ma', 'kh_ma');
    }   
}
