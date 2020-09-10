@extends('layouts.basic')
@section('title','Hệ điều hành')
@section('noidung')
<div class="card">
	<div class="card-header">Danh sách hệ điều hành</div>
	<div class="card-body">
		<p><a class="btn btn-success" href="{!! route('he-dieu-hanh.create') !!}"><i class="fas fa-plus"></i> Thêm</a></p>
		<form method="post" action="{!! route('getTimHDH') !!}" class="d-sm-inline-block form-inline mr-auto ml-md-0 mb-md-1 my-2 my-md-0 mw-100 navbar-search">
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
		@if(Session::has('thongbao_them_hdh'))
		<div class="alert alert-success">{!! Session::get('thongbao_them_hdh') !!}</div>
		@endif
		@if(Session::has('thongbao_xoa_hdh'))
		<div class="alert alert-success">{!! Session::get('thongbao_xoa_hdh') !!}</div>
		@endif
		@if(Session::has('thongbao_sua_hdh'))
		<div class="alert alert-success">{!! Session::get('thongbao_sua_hdh') !!}</div>
		@endif
		<table class="table table-bordered">
			<tr>
				<td width="5%">STT</td>
				<td>Tên hệ điều hành</td>
				<td width="5%">Xóa</td>
				<td width="5%">Sửa</td>
			</tr>
			<?php $stt=1; ?>
			@foreach($hedieuhanh as $dong)
			<tr>
				<td><?php echo $stt; ?></td>
				<td>{!! $dong->TenHDH !!}</td>
				<td>
					<form action="{!! route('he-dieu-hanh.destroy',$dong->id) !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="hidden" name="_method" value="delete">
						<button type="submit" class="btn btn-link"><i class="text-danger fas fa-trash-alt"></i></button>
					</form>
				</td>
				<td>
					<form action="{!! route('he-dieu-hanh.edit',$dong->id) !!}" method="post">
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
				echo '<strong class="text-success">Có '.$th1.' hệ điều hành</strong>';
		 ?>
	</div>
</div>
@stop