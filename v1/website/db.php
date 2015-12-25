<?
$loginstatus = $_SESSION['status'];
$dbserver = "localhost"; 
$dbuser = "txn_whitedr"; 
$dbpassword = "golddust";
$database = "txn_control";
$link = mysql_connect($dbserver, $dbuser , $dbpassword) or die("<center><font color=\"#FF0000\"><b>Database Error</b></font><br><br>The Database Is Currently Unavailable, Please Try Again In A Few Minutes</center>");
mysql_select_db($database, $link) or die("<center><font color=\"#FF0000\"><b>Database Error</b></font><br><br>The Database Is Currently Unavailable, Please Try Again In A Few Minutes</center>");

?>