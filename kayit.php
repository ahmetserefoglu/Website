<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Giriş</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css1/base.css">
	<link rel="stylesheet" href="css1/skeleton.css">
	<link rel="stylesheet" href="css1/layout.css">
	
</head>
<body>

	



	<!-- Primary Page Layout -->

	<div class="container"> 
		
		<div class="form-bg">
			<form action="kontrol.php" method="POST">
				<h2>Uye Kayit Girişi</h2>
				<p><input type="text" name="kullanici" placeholder="Kullanıcı Adı"></p>
				<p><input type="password" name="sifre" placeholder="Şifre"></p>
				
				<button type="submit" name="gonder" value="Giriş Yap"></button>
			<form>
		</div>

	
		


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>