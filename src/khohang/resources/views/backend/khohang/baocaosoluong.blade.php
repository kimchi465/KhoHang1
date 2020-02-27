{{-- View này sẽ kế thừa giao diện từ `backend.layouts.index` --}}
@extends('backend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Báo cáo số lượng lượng tồn
@endsection

{{-- Thay thế nội dung vào Placeholder `content` của view `backend.layouts.index` --}}
@section('content')
<!-- Đây là div hiển thị Kết quả (thành công, thất bại) sau khi thực hiện các chức năng Thêm, Sửa, Xóa.
- Div này chỉ hiển thị khi trong Session có các key `alert-*` từ Controller trả về. 
- Sử dụng các class của Bootstrap "danger", "warning", "success", "info" để hiển thị màu cho đúng với trạng thái kết quả.
-->
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>
<h4 style="text-align: center;">BÁO CÁO NHẬP XUẤT TỒN</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <!-- <th>Tên kho</th> -->
            <th>Tên sản phẩm</th>
            <th>Đơn vị tính</th>
            <th>Số lượng nhập</th>
            <th>Số lượng xuất</th>
            <th>Số lượng tồn</th>
            <th>Đơn giá</th>
        </tr>
    </thead>
    <tbody>
     <!-- Sử dụng vòng lặp foreach để duyệt qua các sản phẩm 
        - Biến $danhsachsanpham là biến được truyền qua từ action `index()` trong controller SanPhamController.
        -->       
        @foreach($danhsachchitietnk as $ctnk)
            <tr>
               
                <td>{{ $ctnk->sanpham1s->sp_ten }}</td>
                <td>{{ $ctnk->ctnk_donViTinh }}</td>
                <td>{{ $ctnk->slnhap }}</td>
                <td></td>
                <td></td>
                <td>{{ $ctnk->ctnk_donGia }}</td>
            </tr>
        @endforeach
        
        
    </tbody>
</table>
@endsection