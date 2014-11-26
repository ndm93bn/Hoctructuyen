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
	{{HTML::script('ckeditor/ckeditor.js')}}
	<!-- File CSS chính cua website -->
	{{HTML::style('assets/css/style.css')}}

	{{HTML::script('ckeditor/plugins/syntaxhighlight/scripts/shCore.js')}}
	{{HTML::script('ckeditor/plugins/syntaxhighlight/scripts/shBrushCss.js')}}
	{{HTML::script('ckeditor/plugins/syntaxhighlight/scripts/shBrushJava.js')}}
	{{HTML::script('ckeditor/plugins/syntaxhighlight/scripts/shBrushPhp.js')}}
	{{HTML::script('ckeditor/plugins/syntaxhighlight/scripts/shBrushXml.js')}}

	{{HTML::style('ckeditor/plugins/syntaxhighlight/styles/shCore.css')}}
	{{HTML::style('ckeditor/plugins/syntaxhighlight/styles/shThemeDefault.css')}}

    <script type="text/javascript">
         SyntaxHighlighter.all();
    </script>


	
	@yield("head")

</head>

<body>
	<div class="body">
	 @yield("body")
	</div>
	{{HTML::script("assets/js/bootstrap.js")}}

	<div class="footer">
	 @yield("footer")
	</div>
</body>
</html>
