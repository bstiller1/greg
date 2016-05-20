<?php include('include/header.php'); ?>
<?php include('include/addUser.php'); ?>
<div id="content">
<p>Create User</p>
<hr />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
<tr>
<td style="border:none;">First Name: </td>
<td style="border:none;"><input id="idFirstName" type="text" name="firstName" required/></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td>
</tr>
<tr>
<td style="border:none;">Last Name: </td>
<td style="border:none;"><input type="text" name="lastName" required/></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td>
</tr>
<tr>
<td style="border:none;">User Name: </td>
<td style="border:none;"><input type="text" name="userName" required/></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td>
</tr>
<tr>
<td style="border:none;">Password: </td>
<td style="border:none;"><input type="password" name="password" required/></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td>
</tr>
<tr>
<td style="border:none;">&nbsp;</td>
</tr>
<tr>
<td style="border:none;">
<input style="margin:5px 0px;" type="submit" name="frmAddUser" value="Create User" /></td>
</tr>
</table></form></div>
<?php include('include/footer.php'); ?>