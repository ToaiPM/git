@extends('layouts.basic')
@section('title','Hệ điều hành')
@section('noidung')
<div class="card">
	<div class="card-header">Cập nhật hệ điều hành</div>
	<div class="card-body">
		<form action="{!! route('he-dieu-hanh.update',$hedieuhanh->id) !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="id" value="{!! $hedieuhanh->id !!}">
			<input type="hidden" name="_method" value="put">
			<div class="form-group">
				<label for="TenHDH">Loại sản phẩm</label>
				<input class="form-control" type="text" name="TenHDH" id="TenHDH" value="{!! $hedieuhanh->TenHDH !!}">
				<p class="text-danger">{!! $errors->first('TenHDH') !!}</p>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Cập nhật</button>
			</div>
		</form>
	</div>
</div>
@stop