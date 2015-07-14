<?php
 include"sqlbaglan.php";
 include"aust.php";
 if(isset($_SESSION["id2"]))
 {
 ?>

 <center>
<form action="mesajgonder1.php" method="post" >

<table><tr><td>  
<label for="kulad" class="uname"  > Kime: </label></td>
<td>    
<select name="kime"  >
<?php
$x=$_SESSION["id2"];
$sorgu1=mysql_query("select hocaad from hocalar ") ;
while($row=mysql_fetch_array($sorgu1) ){ 
 ?>
<option value = "<?php echo $row['hocaad']; ?>"> <?php echo $row['hocaad']; ?> </option>
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