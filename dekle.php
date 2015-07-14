<?php
include"sqlbaglan.php";
include"adust.php";
   if(isset($_SESSION["ad3"]))
   {
?>
<form  action="dkayit.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Ders Adı: </label></td>
<td>    
<input id="kulad" name="adi" required="required" /></td>
</tr>
<tr><td>  
<label for="kulad" class="uname"  > Öğretmen Adı: </label></td>
<td>    
<select name="ad"  >
<?php
$sql=mysql_query("select * from hocalar");
while($row=mysql_fetch_array($sql) ){ 
?>
<option value = "<?php echo $row['hocaad']; ?>"> <?php echo $row['hocaad']; ?> </option>
<?php
} 
?>
</select> 
</td></tr>
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