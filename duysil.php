<?php

include"sqlbaglan.php";
include"hust.php";
if($_SESSION["id1"])
{
$hocaid=$_SESSION["id1"];
$sinifad=$_POST['sinif']; 
$sorgu=mysql_query("select * from dersler where hocaid='$hocaid'");
$row=mysql_fetch_assoc($sorgu);
$dersid=$row['dersid'];
?>
<div id="main">
<div class="full_w">
				<table>
					<thead>
						<tr>
							<th scope="col">Sınıf</th>
							<th scope="col">Duyuru</th>
							<th scope="col" style="width: 30px;">Sil</th>
						</tr>
					</thead>
						<?php
						$sorgu1=mysql_query("select * from duyuru d, siniflar s where d.dersid='$dersid' and s.sinifad='$sinifad' and s.sinifid=d.sinifid ");
                        if($sorgu1)
						{
                        while($row1=mysql_fetch_assoc($sorgu1))
						{
                      ?>
					<tbody>
						<tr>
							<td class="align-center"><?php echo $sinifad; ?></td>
							<td><?php echo $row1['duyurular']." ";?></td>
							<td>
								<a href="duykaldir.php?id=<?php echo $row1['duyuruid'];?>"  class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
						
					</tbody>
					<?php

             }}
			 else {echo "bu derse ait duyuru bulunmamaktadir";}
			 }
             ?>
				</table>
			 
			 </div>
			</div>
</body>
</html>