<?php
     include"hust.php";
	 include"sqlbaglan.php";
	 if(isset($_SESSION['id1']))
	 {
	 $x=$_SESSION['id1'];
	 ?>
	 <div id="main">
	 <div class="full_w">
				
			 </div>
			</div>
</body>
</html>
<?php
}
else
{header('Location:index.php');}
?>