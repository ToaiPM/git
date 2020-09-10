@extends('layouts.basic')
@section('title','Loại sản phẩm')
@section('noidung')
<div class="card">
	<div class="card-header">Cập nhật sản phẩm</div>
	<div class="card-body">
		<form action="{!! route('loai-san-pham.update',$loaisp->id) !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="id" value="{!! $loaisp->id !!}">
			<input type="hidden" name="_method" value="put">
			<div class="form-group">
				<label for="TenLoaiSP">Loại sản phẩm</label>
				<input class="form-control" type="text" name="TenLoaiSP" id="TenLoaiSP" value="{!! $loaisp->TenLoaiSP !!}">
				<p class="text-danger">{!! $errors->first('TenLoaiSP') !!}</p>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Cập nhật</button>
			</div>
		</form>
	</div>
</div>
@stop