<?php
include"hust.php";
include"sqlbaglan.php";
$ad=$_POST['ad'];
$f=mysql_query("delete from siniflar where sinifad='$ad'");
if($f)
{
echo "<center><font color='#000000'>Sınıf silme işlemi başarıyla yapıldı.</font></center> ";
}
else
{
echo "<center><font color='#000000'>Sınıf silme işlemi yapılamadı.</font></center> ";
}
?>
</body>
</html>