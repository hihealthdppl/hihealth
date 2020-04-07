<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>

	<h2>DATA PENGGUNA WEB HiHealth</h2>
	<br />
	<br />
    <a href="tambah_food.php">+ TAMBAH DATA MAKANAN</a>
	<br />
    <br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NAMA MAKANAN</th>
            <th>BERAT(gr)</th>
            <th>Kalori</th>
            <th>Unit</th>
			<th>OPTION</th>
		</tr>

		<?php
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from makanan");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['food']; ?></td>
				<td><?php echo $d['berat']; ?></td>
				<td><?php echo $d['kalori']; ?></td>
                <td><?php echo $d['unit']; ?></td>
				<td>
					<a href="hapus_food.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    <a href="edit_food.php?id=<?php echo $d['id']; ?>">EDIT</a>
                </td>
			</tr>
		<?php
		}
		?>
	</table>
    <br />
    <br />
    <td><a href="halaman_admin.php">KEMBALI --> </a></td>
</body>

</html>