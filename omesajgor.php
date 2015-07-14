<?php

include"aust.php";
include"sqlbaglan.php";
if(isset($_SESSION['id2']))
{
?>
<div id="main">

<div class="full_w">
				<table>
					<thead>
						<tr>
							<th scope="col">Kimden</th>
							<th scope="col">Gelen Mesaj</th>
							<th scope="col">Yanıtla</th>
							<th scope="col">Gönder</th>
						</tr>
					</thead>
						<?php
						$x=$_SESSION['id2'];
						$a=mysql_query("select * from hocamesaj where ogrenciid='$x'");
                        if($a){


                          while($row=mysql_fetch_assoc($a)){
						  $id=$row['hocaid'];
                          $b=mysql_query("select * from hocalar where hocaid='$id'");
                          $row1=mysql_fetch_assoc($b);
                       ?>
					<tbody>
						<tr>
							<td class="align-center"><?php echo $row1['hocaad']; ?></td>
							<td><?php echo $row['mesajlar']; ?> </td>
							<td><center>
							<form action="hyanitla.php" method="POST">
							<textarea name="mesaj" value=""></textarea></center></td>
							<td>
							    <input type="hidden" value="<?php echo $id; ?>" name="h" />
                               <input type="submit" value="Gönder" /> 
							   </td>
						</tr>
						</form>
					</tbody>
					<?php

             }}
			 else { echo "<center><font color='#000000'>Mesajınız Bulunmamaktadır.</font></center>";}
			 }
			 else
			 {
			  header("Location:index.php");
			 }
             ?>
				</table>
			 
			</div>
			</div>
			</body>
			</html>