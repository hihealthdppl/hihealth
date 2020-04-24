<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>

	<h2>DATA PENGGUNA WEB HiHealth</h2>
	<br />
	<br />
	<br />
	<table border="1">
		<tr>
			<th>NO</th>
			<th>USERNAME</th>
			<th>NAMA</th>
			<th>EMAIL</th>
            
            <th>UMUR</th>
            <th>BERAT BADAN</th>
            <th>TINGGI BADAN</th>
			<th>OPTION</th>
		</tr>

		<?php
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from user");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
                <td><?php echo $d['umur']; ?></td>
                <td><?php echo $d['beratbadan']; ?></td>
                <td><?php echo $d['tinggibadan']; ?></td>
				<td>
					<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
    <td><a href="logout.php">LOGOUT</a></td>
</body>

</html>