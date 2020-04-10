<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>

	<h2>DATA MAKANAN</h2>
	<br />
	<a href="halaman_admin.php">KEMBALI</a>
	<br />
	<br />
	<h3>TAMBAH DATA MAKANAN</h3>
	<form method="post" action="tambah_food_aksi.php">
		<table>
			<tr>
				<td>Nama Makanan</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Berat</td>
				<td><input type="number" name="berat"></td>
			</tr>
			<tr>
				<td>Kalori</td>
				<td><input type="text" name="kalori"></td>
			</tr>
            <tr>
				<td>Unit</td>
				<td><input type="number" name="unit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>

</html>