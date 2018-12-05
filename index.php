<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$numero = $_GET["nr"];
$a = 0;
$i = 0;
while ($i < 10) {
		$i+=1;
		$a=$numero*$i;
		?><br><?php
		echo $numero, " X " ,$i, " = " ,$a;
}

?>
<form method="get" action="">
<br>Insira um numero<input type="text" name="nr"><br>
<br><input type="submit"><br>
</form>
</body>
</html>