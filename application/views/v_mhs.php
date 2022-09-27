<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar mahasiswa</title>
	</style>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<th>
				NAMA MAHASISWA
			</th>
			<th>
				NIM
			</th>
			<th>
				ALAMAT
			</th>
		</tr>
		<?php foreach($mahasiswa as $mhs): ?>
			<tr>
				<td><?php echo $mhs['nama']; ?></td> 
				<td><?php echo $mhs['nim']; ?></td>
				<td><?php echo $mhs['alamat']; ?></td>
			</tr>

		<?php endforeach ?>
	</table>

</body>
</html>
