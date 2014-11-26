@extends('user.main')

@section('content')
	<h3>Đăng kí</h3>

	<form method = "post" id = "form-register" action = "" enctype="multipart/form-data">
		<br><label>Tên đăng nhập</label>
		<input type="text" name = "username" id = "username" class = "form-control">
		<br><label>Mật khẩu</label>
		<input type="password" name = "password" id = "password" class = "form-control">
		<br><label>Nhập lại mật khẩu</label>
		<input type="password" name = "repassword" id = "re-password" class = "form-control">
		<br><label>Họ và tên</label>
		<input type="text" name = "fullname" id = "fullname" class = "form-control">
		<br><label>Email</label>
		<input type="text" name = "email" id = "email" class = "form-control">
		<br><label>Năm sinh</label>
		<select name="year">
			<?php
			$year = 2010;
			while($year > 1920){
				echo "<option value='$year' >$year</option>";
				$year--;
			}
			?>
		</select>
		<br><label>Thông tin cơ bản</label>
		<textarea name = "info" id = "info" class = "form-control"></textarea>
		<br><label>Giới tính </label>
		<br>
		<input type='radio' name = "gender" value = "1" checked >Nam
		<br><input type='radio' name = "gender" value = "0">Nữ<br>
		<br><label>Ảnh đại diện</label>
		<input type = "file" name = "avatar" id = "avatar" class = "form-control">

		<br>
		<input type="submit" value="Đăng nhập" class = "btn btn-default">
	</form>

	<script type="text/javascript">
	$('#form-register').validate({
		rules:{
    			
    			username:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			},
    			password:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			},
    			repassword:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			},
    			fullname:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			},
    			email:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			},
    			year:{
    				required:true,
    			},
    			info:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			},
    			avatar:{
    				required:true,
    				minlength:2,
    				maxlength:250,
    			}
    		}
	});
	</script>


@endsection