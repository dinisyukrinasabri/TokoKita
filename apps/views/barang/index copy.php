<h4><b><?= $data['title'] ?></b></h4>
        <br />

        <div class="row">
            <div class="col-sm-12">
                <?php
                    Flasher::Message();
                ?>
            </div>
        </div>

        <!-- Trigger the modal with a button -->
        <a href="<?= base_url; ?>/barang/tambah">
            <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Insert Data</button>
        </a>
        <div class="clearfix"></div>
        <br />
        <!-- view barang -->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;" align="center">
                            <th>No.</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Keterangan</th>
                            <th>Satuan</th>
                            <th>Nama Pengguna</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach ($data['barang'] as $key => $data) {
                            ?>
                            <td> <?= $key+1 ?> </td>
                            <td> <?= $data["IdBarang"] ?> </td>
                            <td> <?= $data["NamaBarang"] ?> </td>
                            <td> <?= $data["Keterangan"] ?> </td>
                            <td> <?= $data["Satuan"] ?> </td>
                            <td> <?= $data["NamaPengguna"] ?> </td>
                            <td align="center">
                            <a href="<?= base_url; ?>/barang/edit/<?= $data['IdBarang'] ?>">
                                <button class="btn btn-warning btn-xs">Edit</button></a>
                                
                            <a href="<?= base_url; ?>/barang/hapus/<?= $data['IdBarang'] ?>"
                            onclick="return confirm('Hapus data?');">
                                <button class="btn btn-danger btn-xs">Hapus</button></a>
                            
                            </td>
                        </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>