@extends('layouts.basic')
@section('title','Hãng sản xuất')
@section('noidung')
<div class="card">
	<div class="card-header">Thêm hãng sản xuất</div>
	<div class="card-body">
		<form action="{!! route('hang-san-xuat.store') !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
				<label for="TenHangSX">Hãng sản xuất</label>
				<input class="form-control" type="text" name="TenHangSX" id="TenHangSX" value="{!! old('TenHangSX') !!}">
				<p class="text-danger">{!! $errors->first('TenHangSX') !!}</p>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Thêm</button>
			</div>
		</form>
	</div>
</div>
@stop