<?php

include"sqlbaglan.php";
include"hust.php";
if(isset($_SESSION['id1']))
	 {
?>
<center>
<form action="dokekle.php" method="post" enctype="multipart/form-data" >
<table><tr><td>  
<label for="kulad" class="uname"  > Sınıf Adı :</label></td>
<td>    
<select name="sinif"  >
<?php
$hocaid=$_SESSION["id1"];
$sorgu=mysql_query("select sinifad from siniflar ") ;
while($row=mysql_fetch_array($sorgu) )
{ 
?>
<option value = "<?php echo $row['sinifad']; ?>"> <?php echo $row['sinifad']; ?> </option>
<?php
}
?>
</select> 
</td></tr>
<tr><td>  
<label for="kulad" class="uname"  > Açıklama: </label></td>
<td>    <input id="kulad" name="aciklama" required="required" /></td>
</tr>
<tr><td>Dosya:</td>
<td> <input type="file" name="file_uc" id="file_uc"></td></tr> 
<tr><td></td>
<td> <p class="login button"> 
<input type="submit" value="kaydet" /> 
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