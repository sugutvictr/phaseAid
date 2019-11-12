<?php
$hostname_conn = "localhost";$database_conn = "vetaitool";$username_conn = "root";$password_conn = "";
$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR);
if (!empty($_POST['csref']) || !empty($_POST['csdesc'])) {
mysql_select_db($database_conn, $conn);
$var1=$_POST['csref'];
$var2=$_POST['csdesc'];
  $insertSQL1 = sprintf("INSERT INTO cslist (csref, csdesc) VALUES ('$var1', '$var2')");
  $Result1 = mysql_query($insertSQL1, $conn) or die(mysql_error());
  header("LOCATION:../phaseaid/#VetStuff");
exit;
}

?>