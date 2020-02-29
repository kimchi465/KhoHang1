@extends('print.layout.paper3')
@section('title')
Biểu mẫu Phiếu xuất kho
@endsection
@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection
@section('custom-css')
<style>
h2{
    text-align: center;
    padding-top: 30px;
}
</style>
@endsection
@section('content')

<form method="post" action="{{ route('danhsachkho.infophieuxuat', ['id' => $xk->xk_ma]) }}" enctype="multipart/form-data">

<input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
<h2>PHIẾU XUẤT KHO</h2>
<table border="0" align="center">
    <tr>
        <td>Ngày lập phiếu: </td>
        <td>{{ old('xk_ngayLapPhieu', $xk->xk_ngayLapPhieu) }}</td>
    </tr>
    <tr>
        <td>Số Phiếu: </td>
        <td>{{ old('xk_soHoaDon', $xk->xk_soHoaDon) }}</td>
    </tr>
</table>

<table border="0">
    <tr>
        <td><b><i>Họ tên người nhận: </b></i></td>
        <td>{{ old('xk_hoTenNguoiNhan', $xk->xk_hoTenNguoiNhan) }}</td>
    </tr>
    <tr>
        <td><b><i>Địa chỉ: </b></i></td>
        <td>{{ old('xk_diaChi', $xk->xk_diaChi) }}</td>
    </tr>
    <tr>
        <td><b><i>Thủ kho: </b></i></td>
        <td>{{ old('nv_thuKho', $xk->nhanviens->nv_hoTen) }}</td>
    </tr>
    <tr>
        <td><b><i>Lý do xuất kho: </b></i></td>
        <td>{{ old('xk_lydo', $xk->xk_lydo) }}</td>
    </tr>
    <tr>
        <td><b><i>Người lập phiếu: </b></i></td>
        <td>{{ old('nv_nguoiLapPhieu', $xk->nhanviens->nv_hoTen) }}</td>
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
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
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

@endsection
