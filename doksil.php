<?php

include"hust.php";
include"sqlbaglan.php";
if($_SESSION["id1"])
{
$hocaid=$_SESSION["id1"];
$sinifad=$_POST['sinif']; 
$sorgu=mysql_query("select * from dersler where hocaid='$hocaid'");
$row=mysql_fetch_assoc($sorgu);
$dersid=$row['dersid'];

?>

<div class="full_w">
				<table>
					<thead>
						<tr>
							<th scope="col">Sınıf Adı</th>
							<th scope="col">Döküman</th>
							<th scope="col" style="width: 30px;">Sil</th>
						</tr>
					</thead>
						<?php
						$s=mysql_query("select * from dokuman d ,siniflar s where dersid='$dersid' and s.sinifid=d.sinifid and s.sinifad='$sinifad' ");
                        if($s){


                          while($row2=mysql_fetch_assoc($s)){
                       ?>
					<tbody>
						<tr>
							<td class="align-center"><?php echo $sinifad; ?></td>
							<td><?php echo $row2['dokumanlar']." ";?> </td>
							<td>
								<a href="dokkaldir.php?id=<?php echo $row2['id'];?>"  class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
						
					</tbody>
					<?php

             }}
			 else { echo "<center><font color='#000000'>Seçtiğiniz dersin yüklü olan dökümanı bulunamamaktadır</font></center>";}
			 }
             ?>
				</table>
			 
			</div>
			</div>
			</body>
			</html>