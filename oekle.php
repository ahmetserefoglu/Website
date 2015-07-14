<?php
   include"adust.php";
   include"sqlbaglan.php";
   if(isset($_SESSION["ad3"]))
   {
?>
<form  action="okayit.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Adı-Soyadı: </label></td>
<td>    
<input id="kulad" name="ad" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Okul No: </label></td>
<td>    
<input id="kulad" name="no" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Sınıfı: </label></td>
<td>    
<select name="sinif"  >
<?php
$sql=mysql_query("select * from siniflar");
while($row=mysql_fetch_assoc($sql) ){ 
?>
<option value = "<?php echo $row['sinifad']; ?>"> <?php echo $row['sinifad']; ?> </option>
<?php
} 
?>
</select> 
</td></tr><tr><td>  
<label for="kulad" class="uname"  > Email: </label></td>
<td>    
<input id="kulad" name="email" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Kullanıcı Adı: </label></td>
<td>    
<input id="kulad" name="kullanici" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Şifre: </label></td>
<td>    
<input type="password" name="sifre" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Şifre Tekrar: </label></td>
<td>    
<input type="password" name="sifre1" required="required" /></td>
</tr>
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" name="gonder" value="Kaydet" /> 
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