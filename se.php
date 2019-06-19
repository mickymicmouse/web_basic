<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
 $limit = 10;
 if (isset($_SESSION["timeout"])) {
 	if (time()-$_SESSION["timeout"]<$limit) {
 		echo time()-$_SESSION["timeout"];
 	}else{
 		echo "time is out";
 		session_destroy();
 		include "new.php";

 	}
 } else{
 	$_SESSION["timeout"]=time();
 }
  ?>

 </body>
 </html>

