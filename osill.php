<?php

include"sqlbaglan.php";
$ad=$_POST['ad'];
$sorgu=mysql_query("select * from ogrenciler where ogrenciad='$ad'") ;
$row = mysql_fetch_assoc($sorgu);
$girisid=$row['girisid'];
$a=mysql_query("delete from giris where girisid='$girisid'");
$b=mysql_query("delete from ogrenciler where ogrenciad='$ad'");

if($a & $b )
{
echo "<center><font color='#000000'>Akademisyen silme işlemi başarıyla yapıldı.</font></center> ";
}
else
{
echo "<center><font color='#000000'>Akademisyen silme işlemi yapılamadı.</font></center> ";
}
?>
</body>
</html>