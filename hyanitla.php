<?php

include"hust.php";
include"sqlbaglan.php";
?>
<center>

<?php 
$x=$_SESSION['id1'];
$id=$_POST['h']; 
$mesaj=$_POST['mesaj'];
$tarih = date("d.m.Y"); 
$saat = date("H:i:s");
$sorgu="insert into hocamesaj(mesajlar,hocaid,ogrenciid,tarih,saat) values ('$mesaj','$x','$id','$tarih','$saat')";
$a=mysql_query($sorgu);
if($a){
echo "Mesaj gönderildi.";
}
?>

                           
			
			</center>
			</body>
			</html>