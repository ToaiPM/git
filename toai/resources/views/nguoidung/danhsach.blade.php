@extends('layouts.basic')
@section('title','Người dùng')
@section('noidung')
<div class="card">
	<div class="card-header">Danh sách người dùng</div>
	<div class="card-body">
		<form method="post" action="{!! route('getTimTaiKhoan') !!}" class="d-sm-inline-block form-inline mr-auto ml-md-0 mb-md-1 my-2 my-md-0 mw-100 navbar-search">
			<div class="input-group">
			  <input type="hidden" name="_method" value="get">
			  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			  <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm tên người dùng..." aria-label="Search" aria-describedby="basic-addon2" name="TuKhoa" required="">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit">
					  <i class="fas fa-search fa-sm"></i>
					</button>
				</div>
			</div>
		</form>
		@if(Session::has('thongbao_xoa_nd'))
		<div class="alert alert-success">{!! Session::get('thongbao_xoa_nd') !!}</div>
		@endif
		@if(Session::has('thongbao_sua_nd'))
		<div class="alert alert-success">{!! Session::get('thongbao_sua_nd') !!}</div>
		@endif
		@if(Session::has('thongbao_loi_knd'))
		<div class="alert alert-warning">{!! Session::get('thongbao_loi_knd') !!}</div>
		@endif
		<table class="table table-bordered">
			<tr>
				<td width="5%">STT</td>
				<td>Họ và tên</td>
				<td>Số điện thoại</td>
				<td>email</td>
				<td>Quyền hạn</td>
				<td>Trạng thái</td>
				<td width="10%">Xem chi tiết</td>
				<td width="5%">Xóa</td>
			</tr>
			<?php $stt=1; ?>
			@foreach($nguoidung as $dong)
			<tr>
				<td><?php echo $stt; ?></td>
				<td>{!! $dong->name !!}</td>
				<td>{!! $dong->phone !!}</td>
				<td>{!! $dong->email !!}</td>
				<td>
					@if($dong->permission==1)
					<span class="badge badge-primary">Quản trị viên</span>
					@else
					<span class="badge badge-secondary">Thành viên</span>
					@endif
				</td>
				<td class="text-center">
					@if($dong->status==0)
					<a class="text text-success text-decoration-none" href="{!! route('getKhoaTaiKhoan',$dong->id) !!}"><i class="text-success fas fa-lock-open"></i> Hoạt động</a>
					@else
					<a class="text text-danger text-decoration-none" href="{!! route('getKhoaTaiKhoan',$dong->id) !!}"><i class="text-danger fas fa-user-lock"></i> Bị khóa</a>
					@endif
				</td>
				<td class="text-center">
					<a class="text-decoration-none text-success" href="{!! route('getChiTietTaiKhoan',$dong->id) !!}"><i class="text-success fas fa-eye"></i> Xem</a>
				</td>
				<td class="text-center">
					<a href="{!! route('getXoaTaiKhoan',$dong->id) !!}"><i class="text-danger fas fa-user-minus"></i></a>
				</td>
			</tr>
			<?php $stt++; ?>
			@endforeach
		</table>
		<?php 
			$th1=$stt-1;
			if($stt==1)
				echo '<strong class="text-warning">Không tìm thấy...</strong>';
			else
				echo '<strong class="text-success">Có '.$th1.' thành viên</strong>';
		 ?>
	</div>
</div>
@stop