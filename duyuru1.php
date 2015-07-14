<?php
include"aust.php";
include"sqlbaglan.php"; 
?>
<div id="extras">
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
					</tr>
						<tr>
							<th scope="col">DERS ADI</th>
							<th scope="col">DUYURU</th>
							<th scope="col">TARİH-SAAT</th>
							
						</tr>
					</thead>
						  <?php
						  $ogrenciid=$_SESSION["id2"];
						  $sr=mysql_query("select * from ogrenciler where ogrenciid='$ogrenciid'");
						  $rw=mysql_fetch_assoc($sr);
						  $sinifid=$rw["sinifid"];
						   $sayfa=@$_GET["sayfa"];
	                       if(empty($sayfa) || !is_numeric($sayfa))
						   {
	                         $sayfa=1;
		                   }
		                   $kacar=5;
		                   $sorgu25=mysql_query("select * from duyuru where sinifid='$sinifid'");
	                       $kayitsayisi=mysql_num_rows($sorgu25);
		                   $ssayisi=ceil($kayitsayisi/$kacar);
		                   $nereden=($sayfa*$kacar)-$kacar;
						   if(isset($_POST["ara"]))
						   {
						   $aranan=$_POST["aranan"];
	                       $duy=mysql_query("select * from duyuru d, dersler de, siniflar s where  de.dersad like'%$aranan%' and d.dersid=de.dersid  and d.sinifid='$sinifid' and s.sinifid=d.sinifid ");
						   if(mysql_num_rows($duy)>0)
						   {
                           while($row=mysql_fetch_array($duy)){ 
                             ?>  
                       <tbody>
						<tr>
						    <td class="align-center"><?php echo $row['dersad']."  "; ?></td>
							<td class="align-center"><?php echo $row['duyurular']."  "; ?></td>
							<td class="align-center"><?php echo $row['tarih']."-".$row['saat']." "; ?></td>
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
	                       $duy1=mysql_query("select * from duyuru d, dersler de ,siniflar s where   d.sinifid='$sinifid' and  d.dersid=de.dersid  and s.sinifid=d.sinifid order by d.duyuruid limit $nereden,$kacar ");
                           while($row1=mysql_fetch_array($duy1)){ 
             ?>
			 
			 <tbody>
						<tr>
						    <td class="align-center"><?php echo $row1['dersad']."  "; ?></td>
							<td class="align-center"><?php echo $row1['duyurular']."  "; ?></td>
							<td class="align-center"><?php echo $row1['tarih']."-".$row1['saat']." "; ?></td>
						</tr>
						<?php
						}
						?>
						</tbody>
					    </table>
						<div class="entry">
					    <div class="pagination">
					  <?php
				      for($k=1;$k<$ssayisi;$k++)
				      {
					   echo "<a href='duyuru1.php?sayfa=$k'>$k</a>";
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
