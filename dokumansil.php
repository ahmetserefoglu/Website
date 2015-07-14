<?php

include"hust.php";
include"sqlbaglan.php";
if(isset($_SESSION['id1']))
	 {
?>
<center>
<?php
$hocaid=$_SESSION["id1"];
$sorgu=mysql_query("select sinifad from siniflar ") ; 
?>
<form action="doksil.php" method="post" >
<table><tr><td>  
<label for="kulad" class="uname"  > Sınıf Adı </label></td>
<td>    
<select name="sinif"  >
<?php
while($row=mysql_fetch_array($sorgu)){ 
?>
<option value = "<?php echo $row['sinifad']; ?>"> <?php echo $row['sinifad']; ?> </option>
<?php
}
?>
</select> </td>
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" value="Seç" />
</p></td></tr>
</table>

	        </form>			
			</center>
            </body>
			</html>
											<?php
	}
	else{header('Location:index.php');}
	?>