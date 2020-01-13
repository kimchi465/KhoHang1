<?php

namespace App\Http\Controllers\Backend;

use App\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function activate(Request $request, $nv_ma) 
    {
        $nv = Nhanvien::find($nv_ma);
        $nv->nv_trangThai = 2; // Khả dụng
        $nv->save();
        return redirect()->route('home');
    }
}
