<?php
include"hust.php";
include"sqlbaglan.php";
if(isset($_SESSION["id1"]))
 {
?>
<form  action="derskayit.php" method="post" > 
<table>
<tr>
<td>  
<label for="kulad" class="uname"  > Dersin Sınıfı </label></td>
<td>   
<select name="dersad"  >
<?php
$sorgu2=mysql_query("select sinifad from siniflar") ;
while($row=mysql_fetch_array($sorgu2) ){ 
 ?>
<option value = "<?php echo $row['sinifad']; ?>"> <?php echo $row['sinifad']; ?> </option>
<?php
}
 ?>
</select> 
</td>
</tr>
<tr>
<td></td>
<td> <p class="login button"> 
<input type="submit" value="Kaydet" /> 
</p></td></tr>
</table></form>
</body>
</html>
			<?php
	}
	else{header('Location:index.php');}
	?>