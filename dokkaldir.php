<?php

include"hust.php";
include"sqlbaglan.php";
?>
<center>

<?php $id=$_GET['id']; 
$sorgu="delete from dokuman where id='".$id."'";
$a=mysql_query($sorgu);
if($a){
echo "Silme islemi başarıyla gerçekleşmiştir.";
}
?>

                           
			
			</center>
			</body>
			</html>