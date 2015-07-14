<?php

include"sqlbaglan.php";
include"hust.php";
if($_SESSION["id1"])
{
$hocaid=$_SESSION["id1"];
if ($_FILES["file_uc"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file_uc"]["error"] . "<br>";
  }
else
 {
 $sinifad=$_POST['sinif'];
 $sor=mysql_query("select * from siniflar where sinifad='$sinifad'");
 $r=mysql_fetch_assoc($sor);
 $sinifid=$r["sinifid"];
 $aciklama=$_POST['aciklama'];
 $dkaynak= $_FILES["file_uc"]["tmp_name"];
 $disim=$_FILES["file_uc"]["name"] ;
 $dhedef="dosyalar";
 move_uploaded_file($dkaynak,$dhedef.'/'.$disim);
}
  
$sorgu=mysql_query("select * from dersler where hocaid='$hocaid'");
$row=mysql_fetch_assoc($sorgu);
$dersid=$row['dersid'];
$yol="dosyalar/".$disim;
$tarih = date("d.m.Y"); 
$saat = date("H:i:s");

$kaydet=mysql_query("insert into dokuman(konu,dokumanlar,dersid,aciklama,sinifid) values('$disim','$yol','$dersid','$aciklama','$sinifid')")or die("veri ekleme hatasi");
$z=$sinifad." sınıfına döküman eklenmiştir.";		
$kaydet1=mysql_query("insert into duyuru(duyurular,dersid,tarih,saat,sinifid) values('$z','$dersid','$tarih','$saat','$sinifid')");						 
if($kaydet){
echo "<center><font color='#000000'>Döküman ekleme işlemi başarıyla gerçekleşmiştir.</font></center>";
}
}
?>
</body>
</html>