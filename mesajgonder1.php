 <?php
include"sqlbaglan.php";
include"mesajgonder.php";
$mesaj=$_POST['mesaj'];
$hocaad=$_POST['kime']; 
$tarih = date("d.m.Y"); 
$saat = date("H:i:s");

$a=mysql_query("select * from hocalar where hocaad='$hocaad'");
$row=mysql_fetch_assoc($a);
$id=$row['hocaid'];
$x=$_SESSION['id2'];
$s=mysql_query("insert into ogrmesaj(mesajlar,hocaid,ogrenciid,tarih,saat) values('$mesaj','$id','$x','$tarih','$saat')");
if($s){
echo "<center><font color='#000000'>Mesajınız Gönderildi. </font> ";
}



?>