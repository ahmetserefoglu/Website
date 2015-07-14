<?php
include"adust.php";
include"sqlbaglan.php";
   if(isset($_SESSION["ad3"]))
   {
?>
<form  action="asill.php" method="post" > 
<table><tr><td>  
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
</td>
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" value="Sil" /> 
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