<?php
include"hust.php";
include"sqlbaglan.php";           
if(isset($_POST['dersad']))
{
$dersad=$_POST['dersad'];
$x=$_SESSION["id1"];
$p=mysql_query("insert into dersler(hocaid,dersad,sinifid) values ('$x','$dersad')");
if($p)
{
echo "<center><font color='#000000'>Ders ekleme işlemi başarıyla tamamlandı.</font></center>";
}
else echo "<center><font color='#000000'>Ders ekleme işlemi yapılamadı.</font></center>";
}
?>
 </body>
 </html>