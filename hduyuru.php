<?php

include"hust.php";
include"sqlbaglan.php";
if(isset($_SESSION["id1"]))
 {
$hocaid=$_SESSION["id1"];

?>
<div id="main">
<div class="full_w">
			<table>
					<thead>
					<tr>
					<div align="center">
					<form action="" method="post">
	 <fieldset>
     <input id="s" type="text" name="aranan" value="" />
     <input type="submit" value="Submit" id="submitButton"  name="ara" />
     </fieldset>
    </form>
	</div>
						<tr>
							<th scope="col">SINIF ADI</th>
							<th scope="col">DUYURU</th>
							<th scope="col">TARİH-SAAT</th>
							
						</tr>
					</thead>
						  <?php
						  $sayfa=@$_GET["sayfa"];
	                       if(empty($sayfa) || !is_numeric($sayfa))
						   {
	                         $sayfa=1;
		                   }
		                   $kacar=5;
		                   $sorgu25=mysql_query("select * from duyuru du , dersler d where d.hocaid='$hocaid' and d.dersid=du.dersid");
	                       $kayitsayisi=mysql_num_rows($sorgu25);
		                   $ssayisi=ceil($kayitsayisi/$kacar);
		                   $nereden=($sayfa*$kacar)-$kacar;
						   if(isset($_POST["ara"]))
						   {
						   $aranan=$_POST["aranan"];
						   $a=mysql_query("select * from duyuru du , dersler d , siniflar s where s.sinifad like'%$aranan%' and d.hocaid='$hocaid' and d.dersid=du.dersid  and s.sinifid=du.sinifid ");
						    if(mysql_num_rows($a)>0)
						   {
                           while($row=mysql_fetch_array($a)){ 
                             ?>  
                       <tbody>
						<tr>
							<td class="align-center"><?php echo $row['sinifad']."  "; ?></td>
							<td><?php echo $row['duyurular']."  "; ?></td>
							<td><?php echo $row['tarih']."-".$row['saat']." "; ?></td>
						</tr>
						
					</tbody>
					<?php
                        }
                       ?>
				 </table>
					<?php
				  }
				  else
				  {
				  echo "<center><font color='#FF0000'>Aradığınız Doğrultusunda Bilgi Bulunamadı!...</font></center>";
				  }
				  }
				   else
				  {
	                       $duy1=mysql_query("select * from duyuru du , dersler d , siniflar s where  d.hocaid='$hocaid' and d.dersid=du.dersid and s.sinifid=du.sinifid order by du.duyuruid limit $nereden,$kacar ");
                           while($row1=mysql_fetch_array($duy1)){ 
             ?>
			  <tbody>
						<tr>
							<td class="align-center"><?php echo $row1['sinifad']."  "; ?></td>
							<td><?php echo $row1['duyurular']."  "; ?></td>
							<td><?php echo $row1['tarih']."-".$row1['saat']." "; ?></td>
						</tr>
						<?php
						}
						?>
						</tbody>
					    </table>
						<div class="entry">
					    <div class="pagination">
					  <?php
				      for($k=1;$k<=$ssayisi;$k++)
				      {
					   echo "<a href='hduyuru.php?sayfa=$k'>$k</a>";
				      }
				      ?>
					</div>	
					</div>
					<?php
                  }
				  ?>
			 </div>
			</div>




</div>
</body>
</html>
		<?php
	}
	else{header('Location:index.php');}
	?>