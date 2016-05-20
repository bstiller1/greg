<?php
error_reporting(E_ALL ^ E_NOTICE);
$dbConn = mysqli_connect('localhost', 'lizard2', 'lizard', 'gregs_gambits');
if(!$dbConn){
die('Could not connect: ' . mysqli_error($dbConn));
}
//$dbObj = mysql_select_db('gregs_gambits', $dbConn);

?>