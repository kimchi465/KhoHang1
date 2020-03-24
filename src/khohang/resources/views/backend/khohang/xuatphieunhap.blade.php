@extends('print.layout.paper2')
@section('title')
Biểu mẫu Phiếu nhập kho
@endsection
@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection
@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
<style>
h2{
    text-align: center;
    padding-top: 30px;
}
</style>
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

<form method="post" action="{{ route('danhsachkho.infophieunhap', ['id' => $nk->nk_ma], ['id' => $ctnk->nk_ma]) }}" enctype="multipart/form-data">

<input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
<h2>PHIẾU NHẬP KHO</h2>
<table border="0" align="center">
    <tr>
        <td>Ngày lập phiếu: </td>
        <td>{{ old('nk_ngayLapPhieu', $nk->nk_ngayLapPhieu) }}</td>
    </tr>
    <tr>
        <td>Số Phiếu: {{ old('nk_soHoaDon', $nk->nk_soHoaDon) }}</td>
        <td></td>
    </tr>
</table>

<table border="0">
    <tr>
        <td><b><i>Họ tên người giao hàng: </i></b></td>
        <td>{{ old('nk_hoTenNguoiGiaoHang', $nk->nk_hoTenNguoiGiaoHang) }}</td>
    </tr>
    <tr>
        <td><b><i>Lý do nhập kho: </i></b></td>
        <td>{{ old('nk_lydo', $nk->nk_lydo) }}</td>
    </tr>
    <tr>
        <td><b><i>Thủ kho: </i></b></td>
        <td>{{ old('nv_thuKho', $nk->nhanviens->nv_hoTen) }}</td>
    </tr>
    <tr>
        <td><b><i>Nhập tại kho: </i></b></td>
        <td>{{ $ctnk->khos->kho_ten }}</td>
    </tr>
    <tr>
        <td><b><i>Người lập phiếu: </i></b></td>
        <td>{{ old('nv_nguoiLapPhieu', $nk->nhanviens->nv_hoTen) }}</td>
    </tr>
</table>

<table  border="1">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã số</th>
            <th>Tên hàng</th>
            <th>Đơn vị tính</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td> </td>
            <td>{{ $ctnk->sanpham1s->sp_ma }}</td>
            <td>{{ $ctnk->sanpham1s->sp_ten }}</td>
            <td>{{ old('ctnk_donViTinh', $ctnk->ctnk_donViTinh) }}</td>
            <td>{{ old('ctnk_soLuong', $ctnk->ctnk_soLuong) }}</td>
            <td>{{ old('ctnk_donGia', $ctnk->ctnk_donGia) }}</td>
            <td>{{ old('ctnk_thanhtien', $ctnk->ctnk_thanhtien) }}</td>
        </tr>
    </tbody>
</table>
<table>
    <tr>
        <td><b>Tổng tiền: </b></td>
        <td></td>
    </tr>
</table>
</form>
</script>
<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script>
$(document).ready(function(){
    
});
</script>
@endsection
