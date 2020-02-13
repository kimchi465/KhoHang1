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

<form method="post" action="#">

<input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
<h2>PHIẾU XUẤT KHO</h2>
<table border="0" align="center">
    <tr>
        <td>Ngày lập phiếu: </td>
        <td></td>
    </tr>
    <tr>
        <td>Số Phiếu: </td>
        <td></td>
    </tr>
</table>

<table border="0">
    <tr>
        <td>Họ tên người nhận: </td>
        <td></td>
    </tr>
    <tr>
        <td>Địa chỉ: </td>
        <td></td>
    </tr>
    <tr>
        <td>Lý do xuất kho: </td>
        <td></td>
    </tr>
    <tr>
        <td>Thủ kho: </td>
        <td></td>
    </tr>
    <tr>
        <td>Người lập phiếu: </td>
        <td></td>
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
        <td>Tổng tiền: </td>
        <td></td>
    </tr>
</table>
</form>

@endsection
