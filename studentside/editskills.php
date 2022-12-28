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
<td>Skill 1:</td>
<td>
<input type="text" name='skill1' text="Skill1">
</td>
</tr>
<tr>
<td>Skill 2:</td>
<td>
<input type="text" name='skill2' text="Skill2">
</td>
</tr>
<tr>
<td>Skill 3:</td>
<td>
<input type="text" name='skill3' text="Skill3">
</td>
</tr>
<tr>
<td>Skill 4:</td>
<td>
<input type="text" name='skill4' text="Skill4">
</td>
</tr>
<tr>
<td>Skill 5:</td>
<td>
<input type="text" name='skill5' text="Skill5">
</td>
</tr>
<tr>
<td></td>
<td>
<button>Create Account</button>
</td>
</tr>
</tbody></table>
</body>
</html>
