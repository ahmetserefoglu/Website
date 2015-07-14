<?php
include"hust.php";
include"sqlbaglan.php";
  if(isset($_SESSION["id1"]))
   {
$hocaid=$_SESSION['id1'];
$sql1=mysql_query("select * from hocalar where hocaid='$hocaid' " );
							  $row=mysql_fetch_assoc($sql1);
							  $id=$row['girisid'];
							  $sql2=mysql_query("select * from giris where girisid='$id' and yetki='2' " );
							  $row2=mysql_fetch_assoc($sql2);
							  $id=$row['girisid'];
							  $had=$row['hocaad'];
							  $eposta=$row['email'];
							  $kul=$row2['kulad'];
							  $sif=$row2['sifre'];
?>
<form  action="hhesap1.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Adı-Soyadı: </label></td>
<td>    
<input id="kulad" name="adi" readonly="" required="required" value="<?php echo $had; ?>" /></td>
</tr>
<tr><td>  
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
<input id="kulad" type="password" name="sifre" required="required" value="<?php echo $sif; ?>"/></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Şifre Tekrar: </label></td>
<td>    
<input id="kulad" type="password" name="sifre1" required="required" value="<?php echo $sif; ?>"/></td>
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