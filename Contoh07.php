<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menghitung Luas Lingkaran</title>
</head>
<body>
	<?php 
	//Konstanta untuk nilai judul
	define("Judul","Hiting Luas Lingkaran");
	//Konstanta untuk nilai phi
	define("PHI",3.14);
	echo Judul;
	$r=10;
	echo "<br>Jari-jari : $r <br>";
	$luas=PHI*$r*$r;
	echo "Luas Lingkaran = $luas";
	?>
</body>
</html>