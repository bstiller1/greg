<?php
error_reporting(E_ALL ^ E_NOTICE);
include("include/connectDB.php");
if(isset($_POST['frmAddUser']))
{
$returnToLogin = false;
//$dbObj = mysql_select_db('gregs_gambits', $dbConn);
$sqlStatement = "SELECT * FROM users";

$users = mysqli_query($dbConn, $sqlStatement);
while($row = mysqli_fetch_array($users))
{
	if($row['user_Name'] == $_POST['userName'] && $returnToLogin == false)
	{
		echo "<script>alert('Username already exists. Try a new one.');
		location.href = '../greg/newUser.php';</script>";
		$returnToLogin = true;
	} // end check username
	elseif($returnToLogin==false && $row['first_Name'] == $_POST['firstName'] && $row['last_Name']
	== $_POST['lastName'])
	{
		echo "<script>alert('You are already a member. Please log in');
		location.href = '../greg/index.php';</script>";
		$returnToLogin = true;
	} // end elseif
} // end while
if($returnToLogin == false)
{
	$sqlStatement = "INSERT INTO users (first_Name, last_Name, user_Name, password) 
	VALUES ('$_POST[firstName]', '$_POST[lastName]','$_POST[userName]','$_POST[password]')";
	if(!mysqli_query($dbConn, $sqlStatement))
	{
		die("Error could not add: ". mysqli_error($dbConn));
	}
	echo "<script>alert('User has been added. Please log in.'); 
	location.href='../greg/index.php';</script>";
}
} // end if
include("include/closeDB.php");
?>