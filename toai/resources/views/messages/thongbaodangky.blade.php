@if(Session::has('thongbao_dangky'))
	<div class="alert alert-success">{!! Session::get('thongbao_dangky') !!}</div>
@endif