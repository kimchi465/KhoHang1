{{-- View này sẽ kế thừa giao diện từ `backend.layouts.index` --}}
@extends('backend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Danh sách phiếu xuất kho
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
<h4 style="text-align: center;">DANH SÁCH PHIẾU XUẤT KHO</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Mã phiếu xuất</th>
            <th>Số hóa đơn</th>
            <th>Họ tên người nhận</th>
            <th>Địa chỉ</th>
            <th>Lý do xuất kho</th>
            <th>Người lập phiếu</th>
            <th>Ngày lập phiếu</th>
            <th>Ngày xuất kho</th>
            <th>Tổng tiền</th>
            <th>Thủ kho</th>
            <th>Xuất phiếu nhập</th>
        </tr>
    </thead>
    <tbody>
     <!-- Sử dụng vòng lặp foreach để duyệt qua các sản phẩm 
        - Biến $danhsachsanpham là biến được truyền qua từ action `index()` trong controller SanPhamController.
        -->
        @foreach($danhsachxuatkho as $xk)
            <tr>
                <td>{{ $xk->xk_ma }}</td>
                <td>{{ $xk->xk_soHoaDon }}</td>
                <td>{{ $xk->xk_hoTenNguoiNhan }}</td>
                <td>{{ $xk->xk_diaChi }}</td>
                <td>{{ $xk->xk_lydo }}</td>
                <td>{{ $xk->nhanviens->nv_hoTen }}</td>
                <td>{{ $xk->xk_ngayLapPhieu }}</td>
                <td>{{ $xk->xk_ngayXuatKho }}</td>
                <td>{{ $xk->xk_tongtien }}</td>
                <td>{{ $xk->nhanviens->nv_hoTen }}</td>
                <td>
                    <!-- Tạo nút Sửa sản phẩm 
                    - Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
                    - Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.edit`
                    - Route `danhsachsanpham.edit` cần truyền vào 1 tham số {id}. Giá trị cần truyền là {id} của sản phẩm người dùng cần hiệu chỉnh.
                    - Các tham số cần truyền vào hàm route() là 1 array[]
                    - Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/{id}/edit
                    -->
                    
                        <a href="{{ route('danhsachkho.phieuxuatkho')}}" class="btn btn-primary pull-left">Xuất</a>
                           
                           
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection