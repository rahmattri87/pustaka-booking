<html>

<head>
	<title> Tampil Data Transaksi </title>
</head>

<body bgcolor="#6666CC">
	<center>
		<table>
			<tr>
				<th colspan="5">
					<h1>
					Toko Sepatu Ardi
				</th>
			</tr>

			<tr>
				<th> Nama Pembeli</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>

			<tr>
				<th> No HP </th>
				<th>:</th>
				<td>
					<?= $nomor; ?>
				</td>
			</tr>

			<tr>
				<th> Merk Sepatu </th>
				<th>:</th>
				<td>
					<?= $merk; ?>
				</td>
			</tr>

			<tr>
				<th> Harga Sepatu </th>
				<th>:</th>
				<td>
					<?= $harga; ?>
				</td>
			</tr>

			<tr>
				<th> Ukuran </th>
				<th>:</th>
				<td>
					<?= $size; ?>
				</td>
			</tr>

			<tr>
				<td colspan="5" align="center">
					<a href="<?= base_url('transaksi'); ?>">Mau Pesen Lagi?</a>
				</td>
			</tr>

			<tr>
				<td colspan"5" align="center">
				<th> TERIMA KASIH </th>
				<hr>
			</td>
			</tr>	

		</table>
	</center>
</body>

</html>