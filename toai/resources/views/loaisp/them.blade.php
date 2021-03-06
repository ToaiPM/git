@extends('layouts.basic')
@section('title','Loại sản phẩm')
@section('noidung')
<div class="card">
	<div class="card-header">Thêm loại sản phẩm</div>
	<div class="card-body">
		<form action="{!! route('loai-san-pham.store') !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
				<label for="TenLoaiSP">Loại sản phẩm</label>
				<input class="form-control" type="text" name="TenLoaiSP" id="TenLoaiSP" value="{!! old('TenLoaiSP') !!}">
				<p class="text-danger">{!! $errors->first('TenLoaiSP') !!}</p>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Thêm</button>
			</div>
		</form>
	</div>
</div>
@stop