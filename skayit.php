<?php
include"hust.php";
include"sqlbaglan.php";           
$adi=$_POST['adi'];
$sql = mysql_query("SELECT * FROM siniflar  WHERE sinifad='$ad' ");
		            $kontrol = mysql_num_rows($sql);
		            if($kontrol>0)
		            {
		             echo "<center>Sınıf zaten Kayıtlı.</center>";
		            }
		            else
		            {
					
$p=mysql_query("insert into siniflar(sinifad) values ('$adi')");
if($p){
 header("Location:admin.php");
echo "<center><font color='#000000'>Sınıf ekleme işlemi başarıyla tamamlandı.</font></center>";
}
else 
{
header("Location:admin.php"); 
echo "<center><font color='#000000'>Sınıf ekleme işlemi yapılamadı.</font></center>";
}
}

?>
 </body>
 </html>