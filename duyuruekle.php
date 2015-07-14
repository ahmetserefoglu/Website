<?php
 
 include"sqlbaglan.php";
 include"hust.php";
 if(isset($_SESSION["id1"]))
 {
 ?>

 <center>
<form action="duyurukayit.php" method="post" >

<table>   
<tr><td>  
<label for="kulad" class="uname"  > Sınıf </label></td>
<td>    
<select name="sinif"  >
<?php
$sorgu1=mysql_query("select sinifad from siniflar") ;
while($row=mysql_fetch_array($sorgu1) ){ 
 ?>
<option value = "<?php echo $row['sinifad']; ?>"> <?php echo $row['sinifad']; ?> </option>
<?php
}
 ?>
</select> 
</td>
</tr>
<tr><td>
<label for="kulad" class="uname">Bölüm</label></td>
<td>
<select name="bolum">
<?php
     $sorgu2=mysql_query("select bolumad from bolum") ;
while($row1=mysql_fetch_array($sorgu2) ){ 
 ?>  
<option value="<?php echo $row1['bolumad'];?>"><?php echo $row1['bolumad'];?></option>
<?php
}
?>
</select>
</td>
 
                               <tr>
							   <td> Duyuru </td>
							   
							   <td><textarea name="duyuru"></textarea></td>
							   </tr> 
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