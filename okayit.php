<?php
			   session_start();
			   include"sqlbaglan.php";
			   $kaydet=$_POST["gonder"];
			   $ad= $_POST["ad"];
			   $no= $_POST["no"];
			   $sinif= $_POST["sinif"];
			   $kullanici= $_POST["kullanici"];
			   $email=$_POST["email"];
			   $sifre= $_POST["sifre"];
			   $sifre1= $_POST["sifre1"];
			   if(isset($kaydet))
			   {
		
		            if($sifre==$sifre1 && filter_var($email, FILTER_VALIDATE_EMAIL))
					{
		            $sql = mysql_query("SELECT * FROM ogrenciler WHERE ogrenciad='$ad' or ogrencino='$no'");
		            $kontrol = mysql_num_rows($sql);
		            if($kontrol>0)
		            {
		             echo "<center>Ad ve/veya Okul No  Daha Önce Kullanılmıştır.</center>";
		            }
		            else
		            {
					 $sorgu= mysql_query("SELECT * FROM siniflar WHERE sinifad='$ad' "); 
					 $i=mysql_fetch_assoc($sorgu);
					 $sid=$i['sinifid'];
		             $add = mysql_query("insert into ogrenciler(ogrenciad,ogrencino,email,sinifid,girisid) values('$ad','$no','$email','$sid')"); 
					 $a=mysql_query("insert into giris(kulad,sifre,yetki) values('$kullanici','$sifre',3)");
					 $sql1= mysql_query("SELECT * FROM giris WHERE kulad='$kullanici'  AND sifre='$sifre' and yetki='3'");
					 $row=mysql_fetch_assoc($sql1);
					 $id=$row['girisid'];
					 $_SESSION["ad"]=$ad;
					
					 $a=mysql_query("update ogrenciler set girisid='$id' WHERE ogrenciad='$ad' and ogrencino='$no'");
		              if($add & $a)
		              { 
		                echo "<center>Sayın ".$ad." kaydınız başarıyla yapılmıştır, Tebrikler...</center>";
					 
                          header ("Location:giris.php"); 
		              }
		              else
		              {
		                echo "<center>Sayın ".$ad." kaydınız tamamlanamadı,Tekrar deneyiniz...</center>";
			            header("refresh:2; url:kayit.php");
		              }
		            }
		            } 
					else
					{
					echo "<center> Şifreniz ve ya mail uyuşmamaktadır...</center>";
					}
			
			   }
			   ?>
			  
</body>
</html>