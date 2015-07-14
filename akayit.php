<?php
include"hust.php";
include"sqlbaglan.php";           
if(isset($_POST['kaydet'])){
$ad=$_POST['adi'];
$brans=$_POST['brans'];
$email=$_POST['email'];
$kulad=$_POST['kullanici'];
$sifre=$_POST['sifre'];
$sifre1=$_POST['sifre1'];
if($sifre==$sifre1)
{
$sql = mysql_query("SELECT * FROM hocalar WHERE hocaad='$ad' or email='$email'");
		            $kontrol = mysql_num_rows($sql);
		            if($kontrol>0)
		            {
		             echo "<center>Hoca Adı veya E-Mail Daha Önce Kullanılmıştır.</center>";
		            }
		            else
		            {
$p=mysql_query("insert into hocalar(hocaad,email) values ('$ad','$email')");
$a=mysql_query("insert into giris (kulad,sifre,yetki) values('$kulad','$sifre',2)");
$sql1= mysql_query("SELECT * FROM giris WHERE kulad='$kulad'  and sifre='$sifre' and yetki='2'");
$row=mysql_fetch_assoc($sql1);
$id=$row['girisid'];
$b=mysql_query("update hocalar set girisid='$id' WHERE hocaad='$ad' and hbilgi='$brans' ");
if($p & $a & $b){
 header("Location:admin.php");
echo "<center><font color='#000000'>Akademisyen ekleme işlemi başarıyla tamamlandı.</font></center>";
}
else 
{
header("Location:admin.php"); 
echo "<center><font color='#000000'>Akademisyen ekleme işlemi yapılamadı.</font></center>";
}
}
}
}
else
{
   echo "<center><font color='#000000'>Sifre Uyuşmamaktadır.</font></center>";
}

?>
 </body>
 </html>