<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <!-- Danh mục Sản phẩm -->
     
        <li class="treeview {{ Request::is('admin/danhsachsanpham*') ? 'menu-open' : '' }}">
       
            <a href="{{ route('danhsachsanpham.index') }}"><i class="fa fa-link"></i> <span>Danh mục sản phẩm</span>
            

            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        @if(Auth::check())
          @if(auth()->user()->can('them_san_pham'))
          <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachsanpham*') ? 'block' : 'none' }};">
            <li class="{{ Request::is('admin/danhsachsanpham') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.index') }}">Danh sách sản phẩm</a></li>
            <li class="{{ Request::is('admin/danhsachsanpham/create') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.create') }}">Thêm mới sản phẩm</a></li>
          </ul>
        </li>
        @endif
      @endif
        <!-- /.Danh mục Sản phẩm -->

        <!-- Quản lý kho -->
     
        <li class="treeview {{ Request::is('admin/danhsachkho*') ? 'menu-open' : '' }}">
       
            <a href="{{ route('danhsachkho.index') }}"><i class="fa fa-link"></i> <span>Quản lý kho</span>
           
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        <!-- PQuyen... -->
          <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachkho*') ? 'block' : 'none' }};">
            <li class="{{ Request::is('admin/danhsachkho') ? 'active' : '' }}"><a href="{{ route('danhsachkho.index') }}">Quản lý kho</a></li>
            <li class="{{ Request::is('admin/danhsachkho/nhapkho') ? 'active' : '' }}"><a href="{{ route('danhsachkho.nhapkho') }}">Quản lý nhập kho</a></li>
            <li class="{{ Request::is('admin/danhsachsanpham/create') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.create') }}">Quản lý xuất kho</a></li>
            <li class="{{ Request::is('admin/danhsachsanpham/create') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.create') }}">Báo cáo doanh thu</a></li>
            <li class="{{ Request::is('admin/danhsachsanpham/create') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.create') }}">Báo cáo số lượng tồn</a></li>
          </ul>
        </li>
         <!-- /.PQuyen... -->
        <!-- /.Quản lý kho -->
        
        </ul>
    </div>
</nav>