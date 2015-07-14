<?php
include"hust.php";
include"sqlbaglan.php";           
$adi=$_POST['adi'];
$ad=$_POST['ad'];
$sql = mysql_query("SELECT * FROM dersler d ,hocalar h WHERE d.dersad='$ad' or h.hocaad='$ad' and h.hocaid=d.dersid");
		            $kontrol = mysql_num_rows($sql);
		            if($kontrol>0)
		            {
		             echo "<center>Hoca Adı ve Ders Adı Daha Önce Kullanılmıştır.</center>";
		            }
		            else
		            {
					$sorgu=mysql_query("select * from hocalar where hocaad='$ad'");
					$r=mysql_fetch_array($sorgu);
					$id=$r['hocaid'];
$p=mysql_query("insert into dersler(dersad,hocaid) values ('$adi','$id')");
if($p){
 header("Location:admin.php");
echo "<center><font color='#000000'>Ders ekleme işlemi başarıyla tamamlandı.</font></center>";
}
else 
{
header("Location:admin.php"); 
echo "<center><font color='#000000'>Ders ekleme işlemi yapılamadı.</font></center>";
}
}

?>
 </body>
 </html>