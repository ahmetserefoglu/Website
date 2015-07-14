<?php
session_start();

if(isset($_SESSION["id1"]) && isset($_SESSION["ad1"]))
{
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Akademisyen Paneli</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles.css" />
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
				<p><h2> <font color="#ffffff"><?php $ad=$_SESSION["ad1"];
                   
							  echo strtoupper($ad);
				?> </font></h2></p>
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
				<li class="upp"><a href="akademisyen.php"><h4><font color="#ffffff">Anasayfa</h4></font></a>
					<ul>
						<li>&#8250; <a href="duyuruekle.php">Duyuru Ekle</a></li>
						<li>&#8250; <a href="duyurusil.php">Duyuru Sil</a></li>
						<li>&#8250; <a href="hduyuru.php">Duyuruları Görüntüle</a></li>
						<li>&#8250; <a href="dokumanekle.php">Döküman Ekle</a></li>
						<li>&#8250; <a href="dokumansil.php">Döküman Sil</a></li>
						<li>&#8250; <a href="dokuman.php">Dökümanları Görüntüle</a></li>
						
					</ul>
				</li>
				</li>
				<li class="upp"><a href=""><h4><font color="#ffffff">Mesajlar</h4></font></a>
					<ul>
						<li>&#8250; <a href="hmesajgonder.php">Mesaj Gönder</a></li>
						<li>&#8250; <a href="hmesajgor.php">Mesaj Görüntüle</a></li>
						
					</ul>
				</li>
				<li class="upp"><a href=""><h4><font color="#ffffff">Profilim</h4></font></a>
					<ul>
						<li>&#8250; <a href="hhesap.php">Hesap Bilgileri</a></li>
						<li>&#8250; <a href="cikis.php">Çıkış Yap</a></li>
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
					<li class="b2"><a class="icon add_page" href="duyuruekle.php">Duyuru Ekle</a></li>
					<li class="b2"><a class="icon config" href="duyurusil.php">Duyuru Sil</a></li>
					<li class="b2"><a class="icon photo" href="hduyuru.php">Duyuruları Görüntüle</a></li>
					<li class="b2"><a class="icon add_page" href="dokumanekle.php">Döküman Ekle</a></li>
					<li class="b2"><a class="icon config" href="dokumansil.php">Döküman Sil</a></li>
					<li class="b2"><a class="icon photo" href="dokuman.php">Dökümanları Görüntüle</a></li>
					
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Mesajlar</div>
				<ul>
					<li class="b1"><a class="icon add_page" href="hmesajgonder.php">Mesaj Gönder</a></li>
					<li class="b1"><a class="icon config" href="hmesajgor.php">Mesaj Görüntüle</a></li>
					
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Çıkış Yap</div>
				<ul>
					<li class="b1"><a class="icon users" href="cikis.php">Oturumu Kapat</a></li>
				</ul>
			</div>
		</div>
		<?php
		}
		?>