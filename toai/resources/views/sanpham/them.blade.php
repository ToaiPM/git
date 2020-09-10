@extends('layouts.basic')
@section('title','Sản phẩm')
@section('noidung')
<div class="card">
	<div class="card-header">Thêm sản phẩm</div>
	<div class="card-body">
		<form action="{!! route('san-pham.store') !!}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
				<label for="TenSP">Tên sản phẩm</label>
				<input class="form-control" type="text" name="TenSP" id="TenSP" value="{!! old('TenSP') !!}">
				<p class="text-danger">{!! $errors->first('TenSP') !!}</p>
			</div>
			<div class="form-group">
				<label for="loaisp_id">Loại sản phẩm</label>
				<select class="form-control" type="text" name="loaisp_id" id="loaisp_id">
					<option value="">--Chọn--</option>
					@foreach($loaisp as $dong_lsp)
					<option value="{!! $dong_lsp->id !!}">{!! $dong_lsp->TenLoaiSP !!}</option>
					@endforeach
				</select>
				<p class="text-danger">{!! $errors->first('loaisp_id') !!}</p>
			</div>
			<div class="form-group">
				<label for="hangsx_id">Hãng sản xuất</label>
				<select class="form-control" type="text" name="hangsx_id" id="hangsx_id">
					<option value="">--Chọn--</option>
					@foreach($hangsx as $dong_hsx)
					<option value="{!! $dong_hsx->id !!}">{!! $dong_hsx->TenHangSX !!}</option>
					@endforeach
				</select>
				<p class="text-danger">{!! $errors->first('hangsx_id') !!}</p>
			</div>
			<div class="form-group">
				<label for="hedieuhanh_id">Hệ điều hành</label>
				<select class="form-control" type="text" name="hedieuhanh_id" id="hedieuhanh_id">
					<option value="">--Chọn--</option>
					@foreach($hedieuhanh as $dong_hdh)
					<option value="{!! $dong_hdh->id !!}">{!! $dong_hdh->TenHDH !!}</option>
					@endforeach
				</select>
				<p class="text-danger">{!! $errors->first('hedieuhanh_id') !!}</p>
			</div>
			<div class="form-group">
				<label for="HinhAnh">Hình ảnh</label>
				<input type="file" name="HinhAnh" id="HinhAnh" value="{!! old('HinhAnh') !!}">
				<p class="text-danger">{!! $errors->first('HinhAnh') !!}</p>
			</div>
			<div class="form-group">
				<label for="GiaBan">Giá bán</label>
				<input class="form-control" type="text" name="GiaBan" id="GiaBan" value="{!! old('GiaBan') !!}">
				<p class="text-danger">{!! $errors->first('GiaBan') !!}</p>
			</div>
			<div class="form-group">
				<label for="MoTa">Mô tả</label>
				<textarea class="form-control" name="MoTa" id="MoTa" value="{!! old('MoTa') !!}"></textarea>
				<p class="text-danger">{!! $errors->first('MoTa') !!}</p>
			</div>
			<div class="form-group">
				<label for="TinhTrang">Tình trạng</label><br>
				<input type="radio" checked="true" name="TinhTrang" id="TinhTrang" value="1">&ensp;<strong class="text-success">Còn hàng</strong><br>
				<input type="radio" name="TinhTrang" id="TinhTrang" value="0">&ensp;<strong class="text-danger">Hết hàng</strong>
				<h4 class="text-danger">{!! $errors->first('TinhTrang') !!}</h4>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Thêm</button>
			</div>
		</form>
	</div>
</div>
@stop