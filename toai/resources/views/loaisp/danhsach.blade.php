@extends('layouts.basic')
@section('title','Loại sản phẩm')
@section('noidung')
<div class="card">
	<div class="card-header">Danh sách loại sản phẩm</div>
	<div class="card-body">
		<p><a class="btn btn-success" href="{!! route('loai-san-pham.create') !!}"><i class="fas fa-plus"></i> Thêm</a></p>
		<form method="post" action="{!! route('getTimLoaiSP') !!}" class="d-sm-inline-block form-inline mr-auto ml-md-0 mb-md-1 my-2 my-md-0 mw-100 navbar-search">
			<div class="input-group">
			  <input type="hidden" name="_method" value="get">
			  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			  <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm loại sản phẩm..." aria-label="Search" aria-describedby="basic-addon2" name="TuKhoa" required="">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit">
					  <i class="fas fa-search fa-sm"></i>
					</button>
				</div>
			</div>
		</form>
		@if(Session::has('thongbao_them_lsp'))
		<div class="alert alert-success">{!! Session::get('thongbao_them_lsp') !!}</div>
		@endif
		@if(Session::has('thongbao_xoa_lsp'))
		<div class="alert alert-success">{!! Session::get('thongbao_xoa_lsp') !!}</div>
		@endif
		@if(Session::has('thongbao_sua_lsp'))
		<div class="alert alert-success">{!! Session::get('thongbao_sua_lsp') !!}</div>
		@endif
		<table class="table table-bordered">
			<tr>
				<td width="5%">STT</td>
				<td>Tên loại sản phẩm</td>
				<td width="5%">Xóa</td>
				<td width="5%">Sửa</td>
			</tr>
			<?php $stt=1; ?>
			@foreach($loaisp as $dong)
			<tr>
				<td><?php echo $stt; ?></td>
				<td>{!! $dong->TenLoaiSP !!}</td>
				<td>
					<form action="{!! route('loai-san-pham.destroy',$dong->id) !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="hidden" name="_method" value="delete">
						<button type="submit" class="btn btn-link"><i class="text-danger fas fa-trash-alt"></i></button>
					</form>
				</td>
				<td>
					<form action="{!! route('loai-san-pham.edit',$dong->id) !!}" method="post">
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
				echo '<p class="text-warning">Không tìm thấy...</p>';
			else
				echo '<p class="text-success">Có '.$th1.' loại sản phẩm</p>';
		 ?>
	</div>
</div>
@stop