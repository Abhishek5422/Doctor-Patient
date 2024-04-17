<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="email"><br>
	<input type="submit" name="button">
</form>
</body>
</html>

<?php
if(isset($_POST['button']))
{
	$name=$_POST['email'];
}


?>