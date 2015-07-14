<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Anasayfa</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top"> 
			<div class="left">
				
			</div>
			<div class="right">
				<div class="align-right">
					
				</div>
			</div>
		</div>
		<div id="nav">
		
			<ul>
			    <li class="upp"><a href="">                    </a>
					
				</li>
				<li class="upp"><a href="">                     </a>
					
				</li>
				<li class="upp"><a href="">                    </a>
					
				</li>
				<li class="upp"><a href="">                     </a>
					
				</li>
				 <li class="upp"><a href="">                    </a>
					
				</li>
				<li class="upp"><a href="">                     </a>
					
				</li>
				<li class="upp"><a href="">                    </a>
					
				</li>
				<li class="upp"><a href="">                     </a>
					
				</li>
				
				<li class="upp"><a href="giris.php"><h4><font color="#ffffff">Anasayfa</h4></font></a>
					<ul>
						<li>&#8250; <a href="giris.php">Oturum Aç</a></li>
						<li>&#8250; <a href="kayit.php">Üye Kayıt</a></li>
						
					</ul>
					</li>
					<li class="upp"><a href="giris.php"><h4><font color="#ffffff">Hakkımızda</h4></font></a>
					<ul>
						
						
					</ul>
					</li>
				
				<li class="upp"><a href="giris.php"><h4><font color="#ffffff">İletişim</h4></font></a>
					<ul>
						
						
					</ul>
					</li>
				
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Anasayfa</div>
				<ul id="home">
					<li class="b1"><a class="icon users" href="giris.php">Oturum Aç</a></li>
					<li class="b2"><a class="icon add_user" href="kayit.php">Üye Kayıt</a></li>
					
				</ul>
			</div>
			
			
			</div>