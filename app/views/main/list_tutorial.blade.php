@extends('main.main')
@section('content')
<h3>Danh sách khóa học</h3>
<?php
$tuts = Tutorial::all();
foreach ($tuts as $tut) {
	?>
	<div class = "row">
		<a href="{{Asset('khoa-hoc/'.$tut->id.'-'.$tut->alias)}}"><h4>{{$tut->title}}</h4></a>
		<div class = "description">{{$tut->description}}</div>
		<br>
		<a href="" class = "btn btn-success">Xem thêm</a>
		<a href="" class = "btn btn-primary">Đăng kí</a>
		<hr>
</div>
<?php
}
?>
@endsection