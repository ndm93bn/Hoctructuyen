<!Doctype html>
<html lang="vn">
<head>
	<meta charset="utf-8"/>
	<title>
	<?php if(isset($title))
		echo $title;
		else echo "Hoc truc tuyen";
	?>
	</title>

	{{HTML::style('assets/css/bootstrap.css')}}
	{{HTML::script('assets/js/jquery/jquery-1.11.1.min.js')}}
	{{HTML::script('assets/js/jquery-validate/jquery.validate.js')}}
	<!-- File CSS chính cua website -->
	{{HTML::style('assets/css/style.css')}}
	
	@yield("head")

</head>

<body>
	<div class = "container">
	 @yield("body")
	</div>
	{{HTML::script("public/assets/js/bootstrap.js")}}
</body>
</html>
