<?php
include"aust.php";
include"sqlbaglan.php"; 
if(isset($_SESSION["id2"]))
   {               
if(isset($_POST['kaydet'])){
$ad=$_POST['adi'];
$no=$_POST['no'];
$email=$_POST['email'];
$kulad=$_POST['kullanici'];
$sifre=$_POST['sifre'];
$sifre1=$_POST['sifre1'];
if($sifre==$sifre1)
{
$x=$_SESSION['id2'];
$sql1= mysql_query("SELECT * FROM ogrenciler WHERE ogrenciid='$x' ");
$row=mysql_fetch_assoc($sql1);
$id=$row['girisid'];
$p=mysql_query("update ogrenciler set ogrenciad='$ad',ogrencino='$no',email='$email' where girisid='$id' ");
$a=mysql_query("update giris set kulad='$kulad',sifre='$sifre' where girisid='$id' ");

header("Location:ohesap.php"); 
echo "<center><font color='#000000'>Hesap Güncelleme  işlemi başarıyla tamamlandı.</font></center>";
}
else
{
echo "<center><font color='#000000'> Şifre Uyuşmamaktatdır, Bilgileriniz Değiştirilemedi.</font></center>";
}
}

?>
 </body>
 </html>
 <?php
 }
	 	else
		{
		header('Location:index.php');
		}
		?>