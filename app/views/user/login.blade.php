@extends('user.main')

@section('content')
	<h3>Login</h3>

	<form method = "post" id = "form-login" action = "">
		<label>Username</label>
		<input type="text" name = "username" id = "username" class = "form-control">
		<label>Password</label>
		<input type="password" name = "password" id = "password" class = "form-control">
		<br>
		<input type="submit" value="Đăng nhập" class = "btn btn-default">
	</form>

@endsection