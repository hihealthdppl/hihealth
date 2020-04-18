<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>

	<h2>DATA MAKANAN BESERTA KALORI</h2>
	<br />
	<a href="menu_data_food.php">KEMBALI</a>
	<br />
	<br />
	<h3>EDIT DATA MAKANAN</h3>

	<?php

	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "select * from makanan where id='$id'");
	while ($d = mysqli_fetch_array($data)) {
    
    ?>
		<form method="post" action="update_food.php">
			<table>
				<tr>
					<td>Nama Makanan</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['food']; ?>">
					</td>
				</tr>
				<tr>
					<td>BERAT</td>
					<td><input type="number" name="weight" value="<?php echo $d['berat']; ?>"></td>
				</tr>
				<tr>
					<td>KALORI</td>
					<td><input type="text" name="calory" value="<?php echo $d['kalori']; ?>"></td>
				</tr>
                <tr>
					<td>UNIT ( gram / ml / sdm )</td>
					<td><input type="text" name="units" value="<?php echo $d['satuan']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis ( makanan / minuman )</td>
					<td><input type="text" name="jenis" value="<?php echo $d['jenis']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>

</body>

</html>