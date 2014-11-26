@extends('main')

@section('head')
{{HTML::style('assets/css/sb-admin.css')}}
@endsection

@section('body')

<div class="login">
	<div class="loginbox">

	<center><b>Admin login</b></center>

	<form method="post" action="">
		<label>Tên đăng nhập</label>
		<input type="text" class="form-control" name="username" placeholder="Username">
		<label>Mật khẩu</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		<br>
		<center><input type="submit" class="btn btn-default" value="Đăng nhập"></center>
	</form>
   </div>
</div>

@endsection