<?php

include"sqlbaglan.php";
include"hust.php";
?>
<center>

<?php $id=$_GET['id']; 

$sorgu=mysql_query("delete from duyuru where duyuruid='$id'");
if($sorgu)
{
echo "<center><font color='#000000'>Duyuru silme işlemi başarıyla tamamlandı.</font></center>";
}
else
{
echo "<center><font color='#000000'>Duyuru silme işlemi yapıladı.</font></center>";
}
?>

    </center>
	</body>
	</html>