<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<h1>Project Connect</h1>
<h2>Teacher Side</h2>
<?php
include("header.php");
require("db.php");
include("sessionstart.php");
?>
<form method="post">
<table><tbody>
<tr>
<td>Select Course:</td>
<td>
<select>
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</select>
</td>
</tr>
<tr>
<td>Project Name:</td>
<td>
<input type="text" name='projectname' placeholder="Project Name">
</td>
</tr>
<tr>
<td>Project Description:</td>
<td>
<textarea name='projectdescription' rows='14' placeholder="Project Description">
</textarea>
</td>
</tr>
<tr>
<td>Files:</td>
<td>
  <p>Add File<input type="file" name="fileToUpload" id="fileToUpload"></p>
</td>
</tr>
<tr>
<td>Project File 1</td>
<td>
<button>Remove</button>
</td>
</tr>
</tr>
<tr>
<td>Project File 2</td>
<td>
<button>Remove</button>
</td>
</tr>
</tr>
<tr>
<td></td>
<td>
<button>Create Project</button>
</td>
</tr>
</tbody></table>
</form>
</body>
</html>
