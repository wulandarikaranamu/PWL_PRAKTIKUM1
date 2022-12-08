<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan PHP</title>
</head>
<body>
	<h1><?php echo "Membuat Berkas PHP di dalam HTML" ?></h1>
	<p><?php echo "Latihan Membuat Web Statis"?></p>

	<table border="1" style="width: 50%">
		<tr>
			<th>Nama</th>
			<th>Umur</th>
			<th>Nim</th>
			<th>Kelas</th>
			<th>Asal</th>
		</tr>

		<tr>
			<td><?php echo "Merry Wulandari. S"?></td>
			<td><?php echo "19 Tahun"?></td>
			<td><?php echo "22.66.0080"?></td>
			<td><?php echo "21BCIS01-Pemrogr(SI118)"?></td>
			<td><?php echo "Sulawesi Barat"?></td>
		</tr>

		<tr>
			<th>Hobi</th>
			<th>Status</th>
			<th>Fakultas</th>
			<th>Prodi</th>
			<th>Kota</th>
		</tr>

		<tr>
			<td align="center"><?php echo "NGODING"?></td>
			<td><?php echo "Mahasiswa"?></td>
			<td align="center"><?php echo "Teknik"?></td>
			<td align="center"><?php echo "Informatika"?></td>
			<td align="center"><?php echo "Mamuju"?></td>
		</tr>

		<tr>
			<th colspan="5" align="center=">Email</th>
		</tr>
		<tr>
			<td colspan ="5" align="center">wulandarikaranamu02@gmail.com</td>
		</tr>
	</table>
</body>
</html>