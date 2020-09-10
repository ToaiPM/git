@extends('layouts.basic')
@section('title','Sản phẩm')
@section('noidung')
<div class="card">
	<div class="card-header">Danh sách sản phẩm</div>
	<div class="card-body">
		<p><a class="btn btn-success" href="{!! route('san-pham.create') !!}"><i class="fas fa-plus"></i> Thêm</a></p>
		<form method="post" action="{!! route('getTimSanPham') !!}" class="d-sm-inline-block form-inline mr-auto ml-md-0 mb-md-1 my-2 my-md-0 mw-100 navbar-search">
			<div class="input-group">
			  <input type="hidden" name="_method" value="get">
			  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			  <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm sản phẩm..." aria-label="Search" aria-describedby="basic-addon2" name="TuKhoa" required="">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit">
					  <i class="fas fa-search fa-sm"></i>
					</button>
				</div>
			</div>
		</form>
		@if(Session::has('thongbao_them_sp'))
		<div class="alert alert-success">{!! Session::get('thongbao_them_sp') !!}</div>
		@endif
		@if(Session::has('thongbao_xoa_sp'))
		<div class="alert alert-success">{!! Session::get('thongbao_xoa_sp') !!}</div>
		@endif
		@if(Session::has('thongbao_sua_lsp'))
		<div class="alert alert-success">{!! Session::get('thongbao_sua_lsp') !!}</div>
		@endif
		<table class="table table-bordered">
			<tr>
				<td width="5%">STT</td>
				<td>Tên loại sản phẩm</td>
				<td>Giá bán</td>
				<td>Lượt xem</td>
				<td width="10%">Xem chi tiết</td>
				<td width="5%">Xóa</td>
				<td width="5%">Sửa</td>
			</tr>
			<?php $stt=1; ?>
			@foreach($sanpham as $dong)
			<tr>
				<td><?php echo $stt; ?></td>
				<td>{!! $dong->TenSP !!}</td>
				<td>{!! number_format($dong->GiaBan).' VNĐ' !!}</td>
				<td>{!! $dong->LuotXem !!}</td>
				<td class="text-center">
					<form action="{!! route('san-pham.show',$dong->id) !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="hidden" name="_method" value="get">
						<button type="submit" class="btn btn-link text-decoration-none text-success"><i class="text-success fas fa-eye"></i> xem</button>
					</form>
				</td>
				<td>
					<form action="{!! route('san-pham.destroy',$dong->id) !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="hidden" name="_method" value="delete">
						<button type="submit" class="btn btn-link"><i class="text-danger fas fa-trash-alt"></i></button>
					</form>
				</td>
				<td>
					<form action="{!! route('san-pham.edit',$dong->id) !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="hidden" name="_method" value="get">
						<button type="submit" class="btn btn-link"><i class="text-warning fas fa-edit"></i></button>
					</form>
				</td>
			</tr>
			<?php $stt++; ?>
			@endforeach
		</table>
		<?php 
			$th1=$stt-1;
			if($stt==1)
				echo '<strong class="text-warning">Không tìm thấy...</strong>';
			else
				echo '<strong class="text-success">Có '.$th1.' sản phẩm</strong>';
		 ?>
	</div>
</div>
@stop