<?php
include"hust.php";
include"sqlbaglan.php";
$ad=$_POST['ad'];
$f=mysql_query("delete from dersler where dersad='$ad'");
if($f)
{
echo "<center><font color='#000000'>Ders silme işlemi başarıyla yapıldı.</font></center> ";
}
else
{
echo "<center><font color='#000000'>Ders silme işlemi yapılamadı.</font></center> ";
}
?>
</body>
</html>