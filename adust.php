<?php
     session_start();
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Admin Paneli</title>
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
				<p><h2> <font color="#ffffff">Hoşgeldin <?php echo $_SESSION["ad3"];  ?> </font></h2></p>
			</div>
			<div class="right">
				
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
				<li class="upp"><a href="#"><h4><font color="#ffffff">Öğrenciler</h4></font></a></a>
					<ul>
						<li>&#8250; <a href="oekle.php">Öğrenci Ekle</a></li>
						<li>&#8250; <a href="osil.php">Öğrenci Sil</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Öğretmenler</h4></font></a></a>
					<ul>
						<li>&#8250; <a href="aekle.php">Öğretmen Ekle</a></li>
						<li>&#8250; <a href="asil.php">Öğretmen Sil</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Dersler</h4></font></a></a>
					<ul>
						<li>&#8250; <a href="dekle.php">Ders Ekle</a></li>
						<li>&#8250; <a href="dsil.php">Ders Sil</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Sınıflar</h4></font></a></a>
					<ul>
						<li>&#8250; <a href="sekle.php">Sınıf Ekle</a></li>
						<li>&#8250; <a href="ssil.php">Sınıf Sil</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Sınav Sonuçları</h4></font></a></a>
					<ul>
						<li>&#8250; <a href="aekle.php">Sonuç Ekle</a></li>
						<li>&#8250; <a href="asil.php">Sonuç Sil</a></li>
					</ul>
				</li>
				
				
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Öğrenciler</div>
				<ul id="home">
					<li class="b2"><a class="icon users" href="oekle.php">Öğrenci Ekle</a></li>
					<li class="b2"><a class="icon config" href="osil.php">Öğrenci Sil</a></li>
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Öğretmenler</div>
				<ul>
					<li class="b1"><a class="icon users" href="aekle.php">Öğretmen Ekle</a></li>
					<li class="b1"><a class="icon config" href="asil.php">Öğretmen Sil</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Dersler</div>
				<ul>
					<li class="b1"><a class="icon users" href="dekle.php">Ders Ekle</a></li>
					<li class="b1"><a class="icon config" href="dsil.php">Ders Sil</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Sınıflar</div>
				<ul>
					<li class="b1"><a class="icon users" href="sekle.php">Sınıf Ekle</a></li>
					<li class="b1"><a class="icon config" href="ssil.php">Sınıf Sil</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Sınav Sonuçalrı</div>
				<ul>
					<li class="b1"><a class="icon users" href="aekle.php">Sonuç Ekle</a></li>
					<li class="b1"><a class="icon config" href="asil.php">Sonuç Sil</a></li>
				</ul>
			</div>
			
			
			
			<div class="box">
				<div class="h_title">&#8250; Çıkış Yap</div>
				<ul>
					<li class="b1"><a class="icon users" href="cikis.php">Oturumu Kapat</a></li>
				</ul>
			</div>
		</div>
		