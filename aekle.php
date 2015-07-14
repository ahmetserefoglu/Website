<?php
include"sqlbaglan.php";
include"adust.php";
   if(isset($_SESSION["ad3"]))
   {
?>
<form  action="akayit.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Adı-Soyadı: </label></td>
<td>    
<input id="kulad" name="adi" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Branş: </label></td>
<td>    
<input id="kulad" name="brans" required="required" /></td>
</tr>
<tr><td>  
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
<input id="kulad" name="sifre" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Şifre Tekrar: </label></td>
<td>    
<input id="kulad" name="sifre1" required="required" /></td>
</tr>
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" name="kaydet" value="Kaydet" /> 
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