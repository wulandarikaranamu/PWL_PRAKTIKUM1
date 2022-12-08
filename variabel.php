<?php 
	$nama = "Merry Wulandari. S";
	$NPM = "22.66.0080";
	$prodi = "Sistem Informasi";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variabel PHP</title>
</head>
<body>
	<h2 align="center">Memanggil Variabel pada PHP</h2>
	<p align="center">Ayo Buat Webmu Di Sini</p>
	<table border="1" align="center"style= "width:20%">
		<tr>
			<th>Nama</th>
			<th>NPM</th>
			<th>Prodi</th>
		</tr>

		<tr>
			<td><?php echo $nama ?></td>
			<td><?php echo $NPM ?></td>
			<td><?php echo $prodi ?></td>
		</tr>
	</table>
</body>
</html>