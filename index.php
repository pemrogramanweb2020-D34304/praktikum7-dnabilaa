<html>
<head>
	<title>praktikum7</title>
</head>
<body>
 
	<h2>DATA PENDUDUK</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PENDUDUK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tanggal lahir</th>
			<th>Tempat lahir</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from data_penduduk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIK']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['tempat lahir']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>