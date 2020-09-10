@extends('layouts.basic')
@section('title','Chi tiết sản phẩm')
@section('noidung')
<h1 class="text-center">THÔNG TIN CHI TIẾT SẢN PHẨM</h1>
<div class="card">
	<div class="card-header"><strong>{!! $sanpham->TenSP !!}</strong></div>
	<div class="card-body">
		<form action="">
			<div class="form-group">
				<label for="">Hình ảnh</label>
				<div>
					<img src="{!! asset('public/img/product/'.$sanpham->HinhAnh) !!}" alt="">
				</div>
			</div>
			<div class="form-group">
				<label for="">Loại sản phẩm</label>
				<input class="form-control" type="text" value="{!! $sanpham->TenLoaiSP !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Hãng sản xuất</label>
				<input class="form-control" type="text" value="{!! $sanpham->TenHangSX !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Hệ điều hành</label>
				<input class="form-control" type="text" value="{!! $sanpham->TenHDH !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Giá bán</label>
				<input class="form-control" type="text" value="{!! number_format($sanpham->GiaBan).' VNĐ' !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Lượt xem</label>
				<input class="form-control" type="text" value="{!! $sanpham->LuotXem !!}" disabled>
			</div>
			<div class="form-group">
				<label for="">Tình trạng</label>
				<input class="form-control" type="text" value="{!! ($sanpham->TinhTrang==1) ? 'Còn hàng ' : 'Hết hàng' !!}" disabled>
			</div>
		</form>
		<p><a class="btn btn-primary" href="{!! route('san-pham.index') !!}">Quay về danh sách</a></p>
	</div>
</div>
@stop