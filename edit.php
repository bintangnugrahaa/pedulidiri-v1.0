<!DOCTYPE html>
<html>
<head>
	<title>Peduli Diri</title>
</head>
<body>

	<h2>PEDULI DIRI</h2>
	<br/>
<div class="card">
    <div class="card-header">
    <a href="catatan_perjalanan.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
</div>
	<br/>
	<br/>
	<h3>EDIT DATA PERJALANAN</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_perjalanan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="data_perjalanan.php">
			<table>
				<tr>			
					<td>Tanggal</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jam</td>
					<td><input type="time" name="jam" value="<?php echo $d['jam']; ?>"></td>
				</tr>
				<tr>
					<td>Lokasi</td>
					<td><input type="text" name="lokasi" value="<?php echo $d['lokasi']; ?>"></td>
				</tr>
				<tr>
					<td>Suhu</td>
					<td><input type="text" name="suhu" value="<?php echo $d['suhu']; ?>"></td>
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