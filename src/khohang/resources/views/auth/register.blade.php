@extends('backend.layouts.master_fullpage')

@section('content')

<form name="frmdangky" id="frmdangky" method="post" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <h1>Đăng ký</h1>
                        <p class="text-muted">Tạo tài khoản</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i> Tên tài khoản
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Tên tải khoản" name="nv_taiKhoan" value="{{ old('nv_taiKhoan') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Mật khẩu" name="nv_matKhau" value="{{ old('nv_matKhau') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i> Xác nhận mật khẩu
                                </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Mật khẩu" name="nv_matKhau_confirmation" value="{{ old('nv_matKhau_confirmation') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Họ tên" name="nv_hoTen" value="{{ old('nv_hoTen') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <select name="nv_gioiTinh" class="form-control">
                                <option value="0" {{ old('nv_gioiTinh') == "0" ? 'selected' : ''}}>Nam</option>
                                <option value="1" {{ old('nv_gioiTinh') == "1" ? 'selected' : ''}}>Nữ</option>
                                <option value="2" {{ old('nv_gioiTinh') == "2" ? 'selected' : ''}}>Khác</option>
                            </select>
                        </div>
                        <!-- Start Form group EMAIL -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="email" placeholder="Email" name="nv_email" value="{{ old('nv_email') }}">
                        </div><!-- /form group EMAIL -->
                        <!-- ============== END Form group EMAIL ================= -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="date" placeholder="Địa chỉ" name="nv_ngaySinh" value="{{ old('nv_ngaySinh') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Địa chỉ" name="nv_diaChi" value="{{ old('nv_diaChi') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Điện thoại" name="nv_dienThoai" value="{{ old('nv_dienThoai') }}">
                        </div>
                        <button class="btn btn-block btn-success" name="btnDangKy">Tạo tài khoản</button>
                    </div>
                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-12">
                                <center>Nếu bạn đã có Tài khoản, xin mời Đăng nhập</center>
                                <a class="btn btn-primary form-control" href="{{ route('login') }}">Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
