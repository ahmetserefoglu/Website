                        <?php
						    $db= mysql_connect("localhost","root","") or die ("mysql baglantisi saglanamadi".mysql_error());
                            $table= mysql_select_db("dersane",$db)or die ("mysql baglantisi saglanamadi".mysql_error());
                            mysql_query("SET NAMES UTF8");
						?>