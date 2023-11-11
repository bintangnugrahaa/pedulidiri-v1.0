<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
</div>
<div class="card-body">
<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Lokasi</th>
                                            <th>Suhu Tubuh</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from data_perjalanan");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['tanggal']; ?></td>
					<td><?php echo $d['jam']; ?></td>
					<td><?php echo $d['lokasi']; ?></td>
					<td><?php echo $d['suhu']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> | 
						<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php 
			}
			?>
</body>
</table>
</div>
</div>
</div>