<a href="<?= base_url; ?>/barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Back </a>

<h4></br><b><?= $data['title'] ?></b></h4>

<div class="card card-body">
    <div class="table-responsive">
        <table class="table table-striped">
            <form role="form" action="<?= base_url; ?>/barang/updateBarang" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>ID Barang</td>
                    <td><input type="text" class="form-control" name="IdBarang" value="<?= $data['barang']['IdBarang'] ?>" ; readonly></td>
                </tr>
                <tr>
					<td>Nama Barang</td>
					<td><input type="text" class="form-control" placeholder="Masukkan Nama Barang.." name="NamaBarang" value="<?= $data['barang']['NamaBarang'] ?>" ;></td>
				</tr>
                <tr>
					<td>Keterangan</td>
					<td><input type="text" class="form-control" placeholder="Masukkan Keterangan.." name="Keterangan" value="<?= $data['barang']['Keterangan'] ?>" ;></td>
				</tr>
                <tr>
					<td>Satuan</td>
					<td><input type="text" class="form-control" placeholder="Masukkan Satuan.." name="Satuan" value="<?= $data['barang']['Satuan'] ?>" ;></td>
				</tr>
                <tr>
                    <td>Nama Pengguna</td>
                    <td>
						<select name="IdPengguna" class="form-control">
							<option value="#">Pilih Pengguna</option>
							<?php foreach ($data['pengguna'] as $row) : ?>
								<option value="<?= $row['IdPengguna']; ?>" <?php if ($data['barang']['IdPengguna'] == $row['IdPengguna']) {
									echo "selected"; } ?>><?= $row['NamaPengguna']; ?></option>
							<?php endforeach; ?>
						</select>
					</td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary"><i class="fa fa-edit"></i>Update Data</button></td>
                </tr>
            </form>
        </table>
    </div>
</div>