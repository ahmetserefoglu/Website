<?php
include"adust.php";
include"sqlbaglan.php";
   if(isset($_SESSION["ad3"]))
   {
?>
<form  action="ssill.php" method="post" > 
<table><tr><td>  
<label for="kulad" class="uname"  > Sınıf: </label></td>
<td>    
<select name="ad"  >
<?php
$sql=mysql_query("select * from siniflar");
while($row=mysql_fetch_array($sql) ){ 
?>
<option value = "<?php echo $row['sinifad']; ?>"> <?php echo $row['sinifad']; ?> </option>
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