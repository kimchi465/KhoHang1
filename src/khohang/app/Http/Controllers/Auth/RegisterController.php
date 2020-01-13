<?php

namespace App\Http\Controllers\Auth;

use App\Nhanvien;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use Mail;
use App\Mail\RegisterMailer;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
        return Validator::make($data, [
            'nv_taiKhoan' => 'required|string|max:50',
            'nv_matKhau' => 'required|string|min:6|confirmed',
            'nv_hoTen' => 'required|string|max:100',
            'nv_gioiTinh' => 'required',
            'nv_email' => 'required|email:rfc,dns',
            'nv_ngaySinh' => 'required',
            'nv_diaChi' => 'required',
            'nv_dienThoai' => 'required'
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $nv = Nhanvien::create([
            'nv_taiKhoan' => $data['nv_taiKhoan'],
            'nv_matKhau' => bcrypt($data['nv_matKhau']), //123456
            'nv_hoTen' => $data['nv_hoTen'],
            'nv_gioiTinh' => $data['nv_gioiTinh'],
            'nv_email' => $data['nv_email'],
            'nv_ngaySinh' => $data['nv_ngaySinh'],
            'nv_diaChi' => $data['nv_diaChi'],
            'nv_dienThoai' => $data['nv_dienThoai'],
            'nv_taoMoi' => Carbon::now(), // Lấy ngày giờ hiện tại (sử dụng Carbon)
            'nv_capNhat' => Carbon::now(), // Lấy ngày giờ hiện tại (sử dụng Carbon)
            'nv_trangThai' => 1, // Mặc định là 2-Khả dụng
            'q_ma' => 2, // Mặc định là 2-Quản trị
        ]);
        // Gởi mail thông báo đăng ký thành công
        Mail::to('nguyenkimchi468@gmail.com')
            ->send(new RegisterMailer($nv));
        return $nv;
    }
}
