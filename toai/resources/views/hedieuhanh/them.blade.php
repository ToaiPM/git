@extends('layouts.basic')
@section('title','Hệ điều hành')
@section('noidung')
<div class="card">
	<div class="card-header">Thêm Hệ điều hành</div>
	<div class="card-body">
		<form action="{!! route('he-dieu-hanh.store') !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
				<label for="TenHDH">Tên hệ điều hành</label>
				<input class="form-control" type="text" name="TenHDH" id="TenHDH" value="{!! old('TenHDH') !!}">
				<p class="text-danger">{!! $errors->first('TenHDH') !!}</p>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Thêm</button>
			</div>
		</form>
	</div>
</div>
@stop