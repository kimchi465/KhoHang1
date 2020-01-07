<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietnhapkho extends Model
{
    public    $timestamps   = false;
    protected $table        = 'chitietnhapkho';
    protected $fillable     = ['ctnk_soLuong', 'ctnk_thanhtien'];
    protected $guarded      = ['sp_ma', 'nk_ma', 'kho_ma'];
    protected $primaryKey   = ['sp_ma', 'nk_ma', 'kho_ma'];
    public    $incrementing = false;
}
