<?php
include"hust.php";
include"sqlbaglan.php";  
if(isset($_SESSION["id1"]))
   {         
if(isset($_POST['kaydet'])){
$ad=$_POST['adi'];
$email=$_POST['email'];
$kulad=$_POST['kullanici'];
$sifre=$_POST['sifre'];
$sifre1=$_POST['sifre1'];
if($sifre==$sifre1)
{
$x=$_SESSION['id1'];
$sql1= mysql_query("SELECT * FROM hocalar WHERE hocaid='$x' ");
$row=mysql_fetch_assoc($sql1);
$id=$row['girisid'];
$p=mysql_query("update hocalar set hocaad='$ad',email='$email' where hocaid='$x' ");
$a=mysql_query("update giris set kulad='$kulad',sifre='$sifre' where girisid='$id' ");

header("Location:hhesap.php"); 
echo "<center><font color='#000000'>Hesap Güncelleme  işlemi başarıyla tamamlandı.</font></center>";
}
else
{
echo "<center><font color='#000000'>Şifre Uyuşmamaktatdır, Bilgileriniz Değiştirilemedi..</font></center>";
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
