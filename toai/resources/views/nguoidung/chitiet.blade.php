@extends('layouts.basic')
@section('title','Chi tiết tài khoản')
@section('noidung')
<h1 class="text-center">THÔNG TIN TÀI KHOẢN</h1>
<div class="card">
	<div class="card-header">Tài khoản {!! $nguoidung->name !!}</div>
	<div class="card-body">
		<form action="">
			<div class="form-group">
				<label for="">Họ và tên</label>
				<input class="form-control" type="text" value="{!! $nguoidung->name !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input class="form-control" type="text" value="{!! $nguoidung->email !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input class="form-control" type="text" value="{!! $nguoidung->phone !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Quyền hệ thống</label>
				<input class="form-control" type="text" value="{!! ($nguoidung->permission==1) ? 'Quản trị viên' : 'Thành viên' !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Tình trạng</label>
				<input class="form-control" type="text" value="{!! ($nguoidung->status==1) ? 'Bị khóa' : 'Đang hoạt động' !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Quốc gia</label>
				<input class="form-control" type="text" value="{!! $nguoidung->country !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Tỉnh/thành</label>
				<input class="form-control" type="text" value="{!! $nguoidung->state !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Tên công ty</label>
				<input class="form-control" type="text" value="{!! $nguoidung->company !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input class="form-control" type="text" value="{!! $nguoidung->address !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Loại thẻ thanh toán</label>
				<input class="form-control" type="text" value="{!! $nguoidung->card_type !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Số thẻ</label>
				<input class="form-control" type="text" value="{!! $nguoidung->card_number !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Tháng sử dụng</label>
				<input class="form-control" type="text" value="{!! $nguoidung->card_month !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Năm sử dụng</label>
				<input class="form-control" type="text" value="{!! $nguoidung->card_year !!}" disabled>
			</div>
						<div class="form-group">
				<label for="">Thông tin thêm</label>
				<input class="form-control" type="text" value="{!! $nguoidung->info !!}" disabled>
			</div>
		</form>
		<p><a class="btn btn-primary" href="{!! route('getDanhSachNguoiDung') !!}">Quay về danh sách</a></p>
	</div>
</div>
@stop