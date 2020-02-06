@extends('backend.layouts.master')

@section('title')
Thêm mới kho hàng
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('danhsachkho.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  
    <div class="form-group">
        <label for="kho_ten">Tên kho hàng</label>
        <input type="text" class="form-control" id="kho_ten" name="kho_ten" value="{{ old('kho_ten') }}">
    </div>
    <div class="form-group">
        <label for="kho_lienHe">Liên Hệ</label>
        <input type="text" class="form-control" id="kho_lienHe" name="kho_lienHe" value="{{ old('kho_lienHe') }}">
    </div>
    <div class="form-group">
        <label for="kho_diaChi">Địa Chỉ</label>
        <input type="text" class="form-control" id="kho_diaChi" name="kho_diaChi" value="{{ old('kho_diaChi') }}">
    </div>
    <div class="form-group">
        <label for="kho_dienThoai">Điện thoại</label>
        <input type="text" class="form-control" id="kho_dienThoai" name="kho_dienThoai" value="{{ old('kho_dienThoai') }}">
    </div>
    <div class="form-group">
        <label for="kho_quanLy">Quản lý</label>
        <input type="text" class="form-control" id="kho_quanLy" name="kho_quanLy" value="{{ old('kho_quanLy') }}">
    </div>
    <div class="form-group">
        <label for="kho_ghiChu">Ghi chú</label>
        <input type="text" class="form-control" id="kho_ghiChu" name="kho_ghiChu" value="{{ old('kho_ghiChu') }}">
    </div>

    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện bootstrap-fileinput -->
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>

<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection