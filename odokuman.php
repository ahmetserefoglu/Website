<?php

include"aust.php";
include"sqlbaglan.php";
if(isset($_SESSION["id2"]))
 {
?>

<?php
                          $ogrenciid=$_SESSION["id2"];
                          $sr=mysql_query("select * from ogrenciler where ogrenciid='$ogrenciid' ");
						  $rw=mysql_fetch_assoc($sr);
						  $sinifid=$rw["sinifid"];
                          $sorgu=mysql_query(" select * from dokuman d,dersler de , siniflar s where d.dersid=de.dersid  and d.sinifid=s.sinifid and d.sinifid='$sinifid' ");
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
					</tr>
						<tr>
							<th scope="col">DERS ADI</th>
							<th scope="col">DOSYA ADI</th>
							<th scope="col">AÇIKLAMA</th>
							<th scope="col">TARİH-SAAT</th>
							<th scope="col">İNDİR</th>
							
						</tr>
					</thead>
						  <?php
						   $sayfa=@$_GET["sayfa"];
	                       if(empty($sayfa) || !is_numeric($sayfa))
						   {
	                         $sayfa=1;
		                   }
		                   $kacar=5;
		                   $sorgu25=mysql_query("select * from dokuman where sinifid='$sinifid' ");
	                       $kayitsayisi=mysql_num_rows($sorgu25);
		                   $ssayisi=ceil($kayitsayisi/$kacar);
		                   $nereden=($sayfa*$kacar)-$kacar;
						   if(isset($_POST["ara"]))
						   {
						   $aranan=$_POST["aranan"];
                          $sorgu1=mysql_query("select * from dokuman d,dersler de ,siniflar s  where de.dersad like'%$aranan%' and d.dersid=de.dersid and d.sinifid=s.sinifid and d.sinifid='$sinifid' ");
                          if(mysql_num_rows($sorgu1)>0)
						  {
					      while ($sonuc=mysql_fetch_array($sorgu1)){
                           ?> 
					    <tbody>
						<tr>
							<td class="align-center"> <?php echo $sonuc['dersad']."  "; ?></td>
							<td><?php echo $sonuc['konu']."  "; ?></td>
							<td><?php echo $sonuc['aciklama']."  "; ?></td>
							<td><?php echo $sonuc['tarih']."-".$sonuc['saat']." "; ?></td>
							<td><a href="indir.php?id=<?php echo $sonuc['id']; ?>">dosyayı indir</a></td>
							
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
	                       $duy1=mysql_query("select * from dokuman d, dersler de , siniflar s where  d.dersid=de.dersid and d.sinifid=s.sinifid and d.sinifid='$sinifid' order by d.id limit $nereden,$kacar ");
                           while($sonuc=mysql_fetch_array($duy1)){ 
             ?>
			 <tbody>
						<tr>
							<td class="align-center"> <?php echo $sonuc['dersad']."  "; ?></td>
							<td><?php echo $sonuc['konu']."  "; ?></td>
							<td><?php echo $sonuc['aciklama']."  "; ?></td>
							<td><?php echo $sonuc['tarih']."-".$sonuc['saat']." "; ?></td>
							<td><a href="indir.php?id=<?php echo $sonuc['id']; ?>">dosyayı indir</a></td>
							
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
					   echo "<a href='odokuman.php?sayfa=$k'>$k</a>";
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
