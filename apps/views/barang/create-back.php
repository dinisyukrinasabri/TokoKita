<a href="<?= base_url; ?>/barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Back </a> 
 <br/>

 <h4></br><b><?= $data['title'] ?></b></h4>
 
  <div class="row">
    <div class="col-sm-12">
      <?php
        Flasher::Message();
      ?>
    </div>
  </div>
      
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<form role="form" action="<?= base_url; ?>/barang/simpanBarang" method="POST" enctype="multipart/form-data">
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" class="form-control" placeholder="Masukkan Nama Barang.." name="NamaBarang" required></td>
				</tr>
                <tr>
					<td>Keterangan</td>
					<td><input type="text" class="form-control" placeholder="Masukkan Keterangan.." name="Keterangan" required></td>
				</tr>
                <tr>
					<td>Satuan</td>
					<td><input type="text" class="form-control" placeholder="Masukkan Satuan.." name="Satuan" required></td>
				</tr>
                <tr>
					<td>Nama Pengguna</td>
                    <td>
						<select name="IdPengguna" class="form-control">
							<option value="#">Pilih Pengguna</option>
							    <?php foreach ($data['pengguna'] as $row) :?>
                            <option value="<?= $row['IdPengguna']; ?>"><?= $row['NamaPengguna']; ?></option>
                        <?php endforeach; ?>
						</select>
					</td>				
                </tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Insert Data</button></td>
				</tr>
			</form>
		</table>
	</div>
</div>
