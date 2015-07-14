<?php
session_start();
include"sqlbaglan.php";
							
							$giris=$_POST["gonder"];
							$ad= $_POST["kullanici"];
		                    $sifre= $_POST["sifre"];
							
							if(isset($giris))
							{
							
		                      $sql1=mysql_query("select * from giris " ) ;
							  while($row=mysql_fetch_assoc($sql1) or die(mysql_error())) 
							  {
							   $kulad=$row["kulad"];
							   $sif=$row["sifre"];
							   if( $kulad==$ad && $sif==$sifre )
							   {
							     $id=$row['girisid'];
							     $yetki=$row['yetki'];
			
								 if($yetki==2)
								 {
								 $sql2=mysql_query("select * from hocalar where girisid='$id'");
							     $row1=mysql_fetch_assoc($sql2);
							     $id1=$row1['hocaid'];
							     $ad1=$row1['hocaad'];
								 $_SESSION["ad1"]=$ad1;
								 $_SESSION["id1"]=$id1;
								 header("Location:akademisyen.php");
								 }
								 if($yetki==1)
								 {
								 $sql3=mysql_query("select * from giris where girisid='$id'");
							     $row2=mysql_fetch_assoc($sql3);
							     $ad3=$row2['kulad'];
								 $_SESSION["ad3"]=$ad3;
								 header("Location:admin.php");
								 }
								 if($yetki==3)
								 {
								  $sql4= mysql_query("SELECT * FROM ogrenciler WHERE girisid='$id' ");
							      $row3=mysql_fetch_assoc($sql4);
							      $ad2=$row3['ogrenciad'];
								  $id2=$row3['ogrenciid'];
								  $_SESSION['id2']=$id2;
								  $_SESSION['ad2']=$ad2;
								  header("Location:ogrenci.php");
								 }
								
							  }
							  
							}
						}

?>