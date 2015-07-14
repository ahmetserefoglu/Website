<?php
 include"sqlbaglan.php";
 include"hust.php";
 if(isset($_SESSION["id1"]))
 {
 ?>

 <center>
<form action="hmesajgon1.php" method="post" >

<table><tr><td>  
<label for="kulad" class="uname"  > Kime: </label></td>
<td>    
<select name="kime"  >
<?php
$x=$_SESSION["id1"];
$sorgu1=mysql_query("select ogrenciad from ogrenciler ") ;
while($row=mysql_fetch_array($sorgu1) ){ 
 ?>
<option value = "<?php echo $row['ogrenciad']; ?>"> <?php echo $row['ogrenciad']; ?> </option>
<?php
}
 ?>
</select> 
								
								
								
</td>
                                
                               <tr>
							   <td> Mesaj :</td>
							   
							   <td><textarea name="mesaj"></textarea></td>
							   </tr> 
                               <tr><td></td>
                               <td> <p class="login button"> 
                               <input type="submit" value="Gönder" /> 
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