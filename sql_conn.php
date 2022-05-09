<?php
// Defined as constants so that they can't be changed
#DEFINE ('DB_USER', 'root');
#DEFINE ('DB_PASSWORD', '');
#DEFINE ('DB_HOST', 'localhost');
#DEFINE ('DB_NAME', 'test1');
// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser
$dbc = @mysqli_connect('localhost', 'root', '', 'test1')
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
//echo "Connection Successful";
?>

