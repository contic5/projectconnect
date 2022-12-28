<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php
include("header.php");
require("db.php");
include("sessionstart.php");
?>
<form method="post">
<table><tbody>
<tr>
<td>First Name:</td>
<td>
<input type="text" name='firstname' placeholder="Enter first name">
</td>
</tr>
<tr>
<td>Last Name:</td>
<td>
<input type="text" name='lastname' placeholder="Enter last name">
</td>
</tr>
<tr>
<td>School Email:</td>
<td>
<input type="text" name='schoolemail' placeholder="Enter school email">
</td>
</tr>
<tr>
<td>Username:</td>
<td>
<input type="text" name='username' placeholder="Enter username">
</td>
<tr>
<td>Password</td>
<td>
<input type="text" name='password' placeholder="Enter password">
</td>
</tr>
<tr>
<td>Confirm Password:</td>
<td>
<input type="password" name='confirmpassword'>
</td>
</tr>
<tr>
<td></td>
<td>
<button>Create Account</button>
</td>
</tr>
</tbody></table>
</form>
</body>
</html>
