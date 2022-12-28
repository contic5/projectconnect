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
<p>Enter the name and ID of your classes</p>
<form method="post">
<table><tbody>
<tr>
<td>Class 1 Name:</td>
<td>
<input type="text" name='class1' text="Class 1">
</td>
<td>Class 1 ID:</td>
<td>
<input type="text" name='class1id' text="Class 5 ID">
</td>
</tr>
<tr>
<td>Class 2 Name:</td>
<td>
<input type="text" name='class2' text="Class 2">
</td>
<td>Class 2 ID:</td>
<td>
<input type="text" name='class2id' text="Class 2 ID">
</td>
</tr>
<tr>
<td>Class 3 Name:</td>
<td>
<input type="text" name='class3' text="Class 3">
</td>
<td>Class 3 ID:</td>
<td>
<input type="text" name='class3id' text="Class 3 ID">
</td>
</tr>
<tr>
<td>Class 4 Name:</td>
<td>
<input type="text" name='class4' text="Class 4">
</td>
<td>Class 4 ID:</td>
<td>
<input type="text" name='class4id' text="Class 4 ID">
</td>
</tr>
<tr>
<td>Class 5 Name:</td>
<td>
<input type="text" name='class5' text="Class 5">
</td>
<td>Class 5 ID:</td>
<td>
<input type="text" name='class5id' text="Class 5 ID">
</td>
</tr>
</tbody></table>
<button>Set Classes</button>
</body>
</html>
