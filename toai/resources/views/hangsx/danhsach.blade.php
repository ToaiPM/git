@extends('layouts.basic')
@section('title','Hãng sản xuất')
@section('noidung')
<div class="card">
	<div class="card-header">Danh sách hãng sản xuất</div>
	<div class="card-body">
		<p><a class="btn btn-success" href="{!! route('hang-san-xuat.create') !!}"><i class="fas fa-plus"></i> Thêm</a></p>
		<form method="post" action="{!! route('getTimHangSX') !!}" class="d-sm-inline-block form-inline mr-auto ml-md-0 mb-md-1 my-2 my-md-0 mw-100 navbar-search">
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
		@if(Session::has('thongbao_them_hsx'))
		<div class="alert alert-success">{!! Session::get('thongbao_them_hsx') !!}</div>
		@endif
		@if(Session::has('thongbao_xoa_hsx'))
		<div class="alert alert-success">{!! Session::get('thongbao_xoa_hsx') !!}</div>
		@endif
		@if(Session::has('thongbao_sua_hsx'))
		<div class="alert alert-success">{!! Session::get('thongbao_sua_hsx') !!}</div>
		@endif
		<table class="table table-bordered">
			<tr>
				<td width="5%">STT</td>
				<td>Tên hãng sản xuất</td>
				<td width="5%">Xóa</td>
				<td width="5%">Sửa</td>
			</tr>
			<?php $stt=1; ?>
			@foreach($hangsx as $dong)
			<tr>
				<td><?php echo $stt; ?></td>
				<td>{!! $dong->TenHangSX !!}</td>
				<td>
					<form action="{!! route('hang-san-xuat.destroy',$dong->id) !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="hidden" name="_method" value="delete">
						<button type="submit" class="btn btn-link"><i class="text-danger fas fa-trash-alt"></i></button>
					</form>
				</td>
				<td>
					<form action="{!! route('hang-san-xuat.edit',$dong->id) !!}" method="post">
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
				echo '<strong class="text-success">Có '.$th1.' hãng sản xuất</strong>';
		 ?>
	</div>
</div>
@stop