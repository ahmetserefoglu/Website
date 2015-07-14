<?php

include"hust.php";
include"sqlbaglan.php";
if(isset($_SESSION["id1"]))
 {
?><div id="main">
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
							<th scope="col">DÖKÜMAN</th>
							<th scope="col">AÇIKLAMA</th>
							<th scope="col">TARİH-SAAT</th>
							<th scope="col" style="width: 65px;">İNDİR</th>
						</tr>
					</thead>
						  <?php
						  $x=$_SESSION["id1"];
						  $sayfa=@$_GET["sayfa"];
	                       if(empty($sayfa) || !is_numeric($sayfa))
						   {
	                         $sayfa=1;
		                   }
		                   $kacar=5;
		                   $sorgu25=mysql_query("select * from dokuman d,dersler de , siniflar s where  d.dersid=de.dersid and de.hocaid='$x' and d.sinifid=s.sinifid");
	                       $kayitsayisi=mysql_num_rows($sorgu25);
		                   $ssayisi=ceil($kayitsayisi/$kacar);
		                   $nereden=($sayfa*$kacar)-$kacar;
						   if(isset($_POST["ara"]))
						   {
						   $aranan=$_POST["aranan"];
						  $sql=mysql_query("select * from dokuman d,dersler de ,siniflar s where s.sinifad like'%$aranan%' and  d.dersid=de.dersid and de.hocaid='$x' , s.sinifid=d.dersid");
						  if(mysql_num_rows($sql)>0)
						   {
                           while ($sonuc=mysql_fetch_array($sql)){
                             ?>  
                       <tbody>
						<tr>
							<td class="align-center"><?php echo $sonuc['sinifad']."  "; ?></td>
							<td><?php echo $sonuc['konu']."  "; ?></td>
							<td><?php echo $sonuc['aciklama']."";?></td>
							<td><?php echo $sonuc['tarih']."-".$sonuc['saat']." "; ?></td>
							<td>
								<a href="indir.php?id=<?php echo $sonuc['id']; ?>">dosyayı indir</a>
							</td>
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
	                       $duy1=mysql_query("select * from dokuman d,dersler de , siniflar s where  d.dersid=de.dersid and de.hocaid='$x' and s.sinifid=d.sinifid order by d.id limit $nereden,$kacar ");
                           while($sonuc1=mysql_fetch_array($duy1)){ 
             ?>
			 <tbody>
						<tr>
							<td class="align-center"><?php echo $sonuc1['sinifad']."  "; ?></td>
							<td><?php echo $sonuc1['konu']."  "; ?></td>
							<td><?php echo $sonuc1['aciklama']."";?></td>
							<td><?php echo $sonuc1['tarih']."-".$sonuc1['saat']." "; ?></td>
							<td>
								<a href="indir.php?id=<?php echo $sonuc1['id']; ?>">dosyayı indir</a>
							</td>
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
					   echo "<a href='dokuman.php?sayfa=$k'>$k</a>";
				      }
				      ?>
					</div>	
					</div>
					<?php
                  }
				  ?>
			 </div>
			</div>
</body>
</html>
		<?php
	}
	else{header('Location:index.php');}
	?>