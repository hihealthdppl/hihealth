<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>

	<h2>DAFTAR MAKANAN DAN KALORI</h2>
	<br />
	<br />
	<br />
    <br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th> NAMA MAKANAN </th>
            <th> BERAT </th>
            <th> KALORI </th>
            <th> UNIT </th>
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
                <td><?php echo $d['satuan']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
    <br />
    <br />
    <td><a href="index.php">KEMBALI --> </a></td>
</body>

</html>