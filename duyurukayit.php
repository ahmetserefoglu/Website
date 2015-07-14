<?php
include"sqlbaglan.php";
include"duyuruekle.php";
if($_SESSION["id1"])
{
$duyuru=$_POST['duyuru'];
$sinifad=$_POST['sinif'];
$hocaid=$_SESSION["id1"];
$tarih = date("d.m.Y"); 
$saat = date("H:i:s");
$sorgu=mysql_query("select * from dersler where hocaid='$hocaid'");
$row=mysql_fetch_assoc($sorgu);
$id=$row['dersid'];
$sorgu1=mysql_query("select * from siniflar where sinifad='$sinifad'");
$row1=mysql_fetch_assoc($sorgu1);
$sinifid=$row1['sinifid'];
$sorgu2=mysql_query("insert into duyuru(duyurular,dersid,tarih,saat,sinifid) values('$duyuru','$id','$tarih','$saat','$sinifid')");
if($sorgu2)
{
echo "<center><font color='#000000'>Duyuru Ekleme İşlemi Başarıyla tamamlanmıştır. </font> ";
}
}
?>