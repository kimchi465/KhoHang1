<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xuatkho extends Model
{
    const     CREATED_AT    = 'xk_taoMoi';
    const     UPDATED_AT    = 'xk_capNhat';
    protected $table        = 'xuatkho';
    protected $fillable     = ['xk_soHoaDon', 'xk_lydo', 'kh_diachi', 'nv_nguoiLapPhieu', 'xk_ngayLapPhieu', 'xk_tongtien', 'nv_thuKho', 'xk_ngayXuatKho', 'xk_taoMoi', 'xk_capNhat', 'xk_trangThai'];
    protected $guarded      = ['pn_ma'];
    protected $primaryKey   = 'pn_ma';
    protected $dates        = ['xk_ngayLapPhieu', 'xk_ngayXuatKho','xk_taoMoi', 'xk_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
