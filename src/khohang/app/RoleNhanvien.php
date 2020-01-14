<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleNhanvien extends Model
{
    public    $timestamps   = false; //created_at, updated_at

    protected $table        = 'role_nhanvien';
    //protected $fillable     = ;
    protected $guarded      = ['nv_ma', 'role_id'];

    protected $primaryKey   = ['nv_ma', 'role_id'];
    public    $incrementing = false;
}
