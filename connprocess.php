<?php
 require('Connections/conn.php');
  $thelong=$_GET['theLong'];
   $thelatt=$_GET['theLatt'];
   $theconncode=$_GET['conncode'];
	   mysql_select_db($database_conn, $conn);
	   $insertSQL = sprintf("INSERT INTO connarea (theLong, theLatt, conncode)
 VALUES ('$thelong', '$thelatt', '$theconncode')");
  mysql_query($insertSQL, $conn) or die(mysql_error());
 $c_n_longtd = "longtd";
  $c_n_lattd = "lattd";
$c_v__longtd = $thelong;
 $c_v_lattd = $thelatt;
setcookie($c_n_longtd, $c_v__longtd, time() + (86400 * 30), "/");
setcookie($c_n_lattd, $c_v__lattd, time() + (86400 * 30), "/");
 header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
header('Location: pb/');
  exit;
  ?>
