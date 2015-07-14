<?php
session_start();

if(isset($_SESSION["ad2"]))
{
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Öğrenci Paneli</title>
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
				<p><h2> <font color="#ffffff"><?php $ad=$_SESSION["ad2"];
                         
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
				
				
				<li class="upp"><a href="duyuru1.php"><h4><font color="#ffffff">Anasayfa</h4></font></a>
					<ul>
						<li>&#8250; <a href="duyuru1.php">Duyurular</a></li>
						<li>&#8250; <a href="odokuman.php">Dökümanlar</a></li>
						
					</ul>
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Sınav Sonuçları</h4></font></a>
					<ul>
						
						<li>&#8250; <a href="oodev.php">Sonuçlarımı Görüntüle</a></li>
						
					</ul>
				</li>
				
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Mesajlar</h4></font></a>
					<ul>
						<li>&#8250; <a href="mesajgonder.php">Mesaj Gönder</a></li>
						<li>&#8250; <a href="omesajgor.php">Mesajları Görüntüle</a></li>
						
					</ul>
				</li>
				<li class="upp"><a href="#"><h4><font color="#ffffff">Profilim</h4></font></a>
					<ul>
						<li>&#8250; <a href="ohesap.php">Profil Bilgileri</a></li>
						<li>&#8250; <a href="cikis.php">Çıkış Yap</a></li>
						
					</ul>
				</li>
				
				    <li>
					
					</li>
				
				
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Anasayfa</div>
				<ul id="home">
					<li class="b2"><a class="icon report" href="duyuru1.php">Duyurular</a></li>
					<li class="b2"><a class="icon report" href="odokuman.php">Dökümanlar</a></li>
					
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Sınav Sonuçları</div>
				<ul>
					
					<li class="b1"><a class="icon photo" href="oodev.php">Sonucumu Görüntüle</a></li>
					
				</ul>  
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Mesajlar</div>
				<ul>
				    <li class="b1"><a class="icon block_users" href="mesajgonder.php">Mesaj Gönder</a></li>
					<li class="b1"><a class="icon photo" href="omesajgor.php">Mesajları Görüntüle</a></li>
					
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Çıkış Yap</div>
				<ul>
					<li class="b1"><a class="icon users" href="cikis.php">Oturumu Kapat</a></li>
				</ul>
			</div>
		</div>
		
		</div>
		<?php
		}
		?>