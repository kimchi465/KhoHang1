<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietxuatkho extends Model
{
    public    $timestamps   = false;
    protected $table        = 'chitietxuatkho';
    protected $fillable     = ['ctxk_soLuong', 'ctxk_thanhtien'];
    protected $guarded      = ['sp_ma', 'xk_ma', 'kho_ma'];
    protected $primaryKey   = ['sp_ma', 'xk_ma', 'kho_ma'];
    public    $incrementing = false;
}
