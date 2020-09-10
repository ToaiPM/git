@if(Session::has('thongbao_loi'))
	<div class="alert alert-danger">{!! Session::get('thongbao_loi') !!}</div>
@endif