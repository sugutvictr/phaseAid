<?php

$hostname_conn = "localhost";$database_conn = "vetaitool";$username_conn = "root";$password_conn = "";
$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_conn, $conn);
      $sql = "SELECT * FROM dslist";
      $result = mysql_query($sql)or die (mysql_error());
            while($row = mysql_fetch_array($result) or die (mysql_error()))
            {
    ?>
    <style type="text/css">
    	.textStyle{
    		color: #0080bb;
    		font-size: 18px;
    		text-decoration: none;	
    	}

.textStyle a{
    		color: #0080bb;
    		font-size: 18px;
    		text-decoration: none;	
    	}
    	.textStyle:hover a{
    		color: #0080bb;
    		font-size: 18px;
    		text-decoration: underline;	
    	}

    </style>
   <table width="20%"><tr><td width="10%" align="left">
            <?php echo($row['Id']);?>
            </td><td width="30%" align="left" class="textStyle">
            <a href="#"><?php echo($row['dsref']);?> </a>
            </td><td width="60%" align="left">
            <?php echo($row['dsdesc']);?>
            </td></tr></table>
    <?php
            }
    ?>        