<!DOCTYPE html>
<html lang="en" style="font-size: 15px">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>
  <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/css/all.min.css') }}" rel="stylesheet">
  <script src="{{ asset('public/ckeditor/ckeditor/ckeditor.js') }}"></script>
</head>
<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! route('getAdmin') !!}">
          <i class="fas fa-home"></i> HOME
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Quản lý</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{!! route('getDanhSachNguoiDung') !!}"><i class="fas fa-user-friends"></i> Người dùng</a>
            <a class="collapse-item" href="{!! route('loai-san-pham.index') !!}"><i class="fas fa-mobile"></i> Loại sản phẩm</a>
			<a class="collapse-item" href="{!! route('hang-san-xuat.index') !!}"><i class="fas fa-layer-group"></i> Hãng sản xuất</a>
			<a class="collapse-item" href="{!! route('he-dieu-hanh.index') !!}"><i class="fab fa-centos"></i> Hệ điều hành</a>
			<a class="collapse-item" href="{!! route('san-pham.index') !!}"><i class="fab fa-product-hunt"></i> Sản phẩm</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Nhật ký bán hàng</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Danh sách khách hàng</h6>
            <a class="collapse-item" href="#">Tháng 1</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
		<li class="nav-item">
			<a class="nav-link" href=""><i class="fas fa-fw fa-table"></i><span>Duyệt giỏ hàng</span></a>
		</li>
      
        <li class="nav-item">
			<a class="nav-link" href=""><i class="fas fa-fw fa-table"></i><span>Duyệt giỏ hàng</span></a>
		</li>
        <hr class="sidebar-divider d-none d-md-block">
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			    </button>
				
				<li class="nav-item dropdown no-arrow ml-auto">
					<a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2  text-gray-600 small">
							@if(Auth::check() && Auth::user()->permission==1)
								{!! Auth::user()->name !!}
							@else
								Not loged in
							@endif
						</span>
						<img class="img-profile rounded-circle d-none d-lg-inline" src="{{ asset('public/images/quantrivien.jpg') }}">
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="{!! route('getCapNhatAdmin') !!}">
						  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
						  Hồ sơ cá nhân
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{!! route('getDangXuat') !!}">
						  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
						  Đăng xuất
						</a>
					</div>
				</li>
			</nav>
			<div class="container-fluid">	
				@yield('noidung')
			</div>
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Bản quyền &copy; bởi DPM166184</span>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="{{ asset('public/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('public/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('public/js/sb-admin-2.min.js') }}"></script>
	<script type="text/javascript">
		$('div.alert').delay('2000').slideUp();
	</script>
</body>
</html>
