<?php
include"aust.php";
include"sqlbaglan.php";
if(isset($_SESSION["id2"]))
   {     
$x=$_SESSION['id2'];
$sql1=mysql_query("select * from ogrenciler where ogrenciid='$x' " );
							  $row=mysql_fetch_assoc($sql1);
							  $id=$row['girisid'];
							  $sql2=mysql_query("select * from giris where girisid='$id' and yetki='3' " );
							  $row2=mysql_fetch_assoc($sql2);
							  $ad=$row['ogrenciad'];
							  $no=$row['ogrencino'];
							  $eposta=$row['email'];
							  $kul=$row2['kulad'];
							  $sif=$row2['sifre'];
?>
<form  action="ohesap1.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Adı-Soyadı: </label></td>
<td>    
<input id="kulad" name="adi" readonly="" required="required" value="<?php echo $ad; ?>" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Öğrenci No: </label></td>
<td>    
<input id="kulad" name="no" readonly="" required="required" value="<?php echo $no; ?>"/></td>
</tr><tr><td>  
<label for="kulad" class="uname"  > Email: </label></td>
<td>    
<input id="kulad" name="email" required="required" value="<?php echo $eposta; ?>"/></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Kullanıcı Adı: </label></td>
<td>    
<input id="kulad" name="kullanici" required="required"value="<?php echo $kul; ?>" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Şifre: </label></td>
<td>    
<input type="password" id="kulad" name="sifre" required="required" value="<?php echo $sif; ?>"/></td>
</tr>
<tr><td>
<label for="kulad" class="uname"  > Şifre Tekrar: </label></td>
<td>    
<input type="password" id="kulad" name="sifre1" required="required" value="<?php echo $sif; ?>"/></td>
</tr>
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" name="kaydet" value="Değiştir" /> 
</p></td></tr>
</table></form>
</body>
</html>
<?php
 }
	 	else
		{
		header('Location:index.php');
		}
		?>