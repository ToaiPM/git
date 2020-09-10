@extends('layouts.basic')
@section('title','Hãng sản xuất')
@section('noidung')
<div class="card">
	<div class="card-header">Cập nhật hãng sản xuất</div>
	<div class="card-body">
		<form action="{!! route('hang-san-xuat.update',$hangsx->id) !!}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="id" value="{!! $hangsx->id !!}">
			<input type="hidden" name="_method" value="put">
			<div class="form-group">
				<label for="TenHangSX">Hãng sản xuất</label>
				<input class="form-control" type="text" name="TenHangSX" id="TenHangSX" value="{!! $hangsx->TenHangSX !!}">
				<p class="text-danger">{!! $errors->first('TenHangSX') !!}</p>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Cập nhật</button>
			</div>
		</form>
	</div>
</div>
@stop