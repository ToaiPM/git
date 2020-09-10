@extends('layouts.basic')
@section('title','Cập nhật tài khoản admin')
@section('noidung')
<h1 class="text-center">CẬP NHẬT TÀI KHOẢN</h1>
@if(Session::has('capnhat_thanhcong'))
<div class="alert alert-success">{!! Session::get('capnhat_thanhcong') !!}</div>
@endif
<div class="card">
	<div class="card-header">Tài khoản {!! $nguoidung->name !!}</div>
	<div class="card-body">
		<form action="{!! route('postCapNhatAdmin') !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="id" value="{!! $nguoidung->id !!}">
			<div class="form-group">
				<label for="name">Họ và tên</label>
				<input class="form-control" type="text" name="name" id="name" value="{!! $nguoidung->name !!}">
				<p class="text-danger">{!! $errors->first('name') !!}</p>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email" value="{!! $nguoidung->email !!}">
				<p class="text-danger">{!! $errors->first('email') !!}</p>
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại</label>
				<input class="form-control" type="text" name="phone" id="phone" value="{!! $nguoidung->phone !!}">
				<p class="text-danger">{!! $errors->first('phone') !!}</p>
			</div>
			<div class="form-group">
				<label for="password">Mật khẩu mới</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<div class="form-group">
				<label for="password_confirm">Xác nhận mật khẩu</label>
				<input class="form-control" type="password" name="password_confirm" id="password_confirm">
				@if(Session::has('xacnhan_matkhau'))
				<p class="text-danger">{!! Session::get('xacnhan_matkhau') !!}</p>
				@endif
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Cập nhật</button>
				<a class="btn btn-secondary" href="{!! route('getAdmin') !!}">Hủy cập nhật</a>
			</div>
		</form>
	</div>
</div>
@stop