 <?php
include"sqlbaglan.php";
include"hmesajgonder.php";
$mesaj=$_POST['mesaj'];
$ogrenciad=$_POST['kime']; 
$tarih = date("d.m.Y"); 
$saat = date("H:i:s");

$a=mysql_query("select * from ogrenciler where ogrenciad='$ogrenciad'");
$row=mysql_fetch_assoc($a);
$ogrenciid=$row['ogrenciid'];
$hocaid=$_SESSION['id1'];
$s=mysql_query("insert into hocamesaj(mesajlar,hocaid,ogrenciid,tarih,saat) values('$mesaj','$hocaid','$ogrenciid','$tarih','$saat')");
if($s){
echo "<center><font color='#000000'>Mesajınız Gönderildi. </font> ";
}
else
{
echo "<center><font color='#000000'>Mesajınız Gönderilemedi. </font> ";
}




?>