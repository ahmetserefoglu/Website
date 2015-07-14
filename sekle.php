<?php
include"sqlbaglan.php";
include"adust.php";
   if(isset($_SESSION["ad3"]))
   {
?>
<form  action="skayit.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Sınıf Adı: </label></td>
<td>    
<input id="kulad" name="adi" required="required" /></td>
</tr>
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" value="Kaydet" /> 
</p></td></tr>
</table>
</form>
</body>
</html>
<?php
 }
	 	else
		{
		header('Location:index.php');
		}
		?>