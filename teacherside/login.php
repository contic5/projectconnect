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
<td>Username:</td>
<td>
<input type="text" name='username' placeholder="Enter username">
</td>
</tr>
<tr>
<td>Password:</td>
<td>
<input type="password" name='password'>
</td>
</tr>
<tr>
<td></td>
<td>
<button>Login</button>
</td>
</tr>
</tbody></table>
</form>
</body>
</html>
