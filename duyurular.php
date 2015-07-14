<?php
 include "sqlbaglan.php";
  include"iust1.php";

 $duyuru=mysql_query('select bolumid,duyurular,tarih,duyurubitis from duyuru');

while($row=mysql_fetch_array($duyuru)){
 if($row['bolumid']==1){
 ?>
 <div id="mainahmet">
	 <div class="duyuruahmet">
		<font color="#000002"><h1>
	<center><p><u><marquee align="middle" scrollamount="2" height="300" width="100%" direction="down"scrolldelay="1"> <?php echo $row['duyurular']."--"; echo $row['tarih']; ?></marquee> </u></p></center>
	</h1></font>
	 </div>
	 <?php
}
else if($row['bolumid']==2){
?>
	 <div class="duyuruahmet1">
		 <font color="#000002"><h1>
	<center><p><marquee align="middle" scrollamount="2" height="300" width="100%" direction="down"scrolldelay="1"> <?php echo $row['duyurular']."--"; echo $row['tarih']; ?></marquee> </p></center>
	</h1></font>
	 </div>
 
 </div>
<?php
}
}
?>



 </body>
 </html>