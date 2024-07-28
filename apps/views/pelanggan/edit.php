          <div class="content-wrapper">
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                  <!-- Basic Bootstrap Table -->
                  <div class="card">
                      <h5 class="card-header">
                          <a href="<?= base_url; ?>/pelanggan" class="btn rounded-pill btn-primary">
                              <i class="tf-icons bx bx-arrow-back bx-18px me-2"></i>Back</button>
                          </a>
                          Edit Pelanggan
                      </h5>
                      <div class="card-body">
                          <form role="form" action="<?= base_url; ?>/pelanggan/updatePelanggan" method="POST" enctype="multipart/form-data">
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-nama-barang">ID Pelanggan</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="IdPelanggan" class="form-control" id="basic-default-id-barang" value="<?= $data['pelanggan']['IdPelanggan'] ?>" readonly required>
                                      <div id="defaultFormControlHelp" class="form-text">
                                          Tidak disa di ubah! (ReadOnly)
                                      </div>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-nama-barang">Nama Pelanggan</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="NamaPelanggan" class="form-control" id="basic-default-nama-barang" value="<?= $data['pelanggan']['NamaPelanggan'] ?>" required>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-keterangan">Nama Depan</label>
                                  <div class="col-sm-10">
                                      <textarea name="NamaDepan" id="basic-default-keterangan" class="form-control" required><?= $data['pelanggan']['NamaDepan'] ?></textarea>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">Nama Belakang</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="Nama Belakang" class="form-control" id="basic-default-satuan" value="<?= $data['pelanggan']['NamaPelanggan'] ?>" required>
                                  </div>
                              </div>
                              <!-- <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">No HP</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="NoHP" class="form-control" id="basic-default-satuan" value="<?= $data['pelanggan']['NoHP'] ?>" required>
                                  </div>
                              </div> -->
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">Alamat</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="Alamat" class="form-control" id="basic-default-satuan" value="<?= $data['pelanggan']['Alamat'] ?>" required>
                                  </div>
                              </div>
            

                              <!-- <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-nama-pengguna">Nama Pengguna</label>
                                  <div class="col-sm-10">
                                      <select id="idpengguna" name="IdPengguna" class="form-select" required>
                                          <option value="">Pilih Pengguna</option>
                                          <?php foreach ($data['pengguna'] as $row) : ?>
                                              <option value="<?= $row['IdPengguna']; ?>" <?= ($data['barang']['IdPengguna'] == $row['IdPengguna']) ? "selected" : "" ?>><?= $row['NamaPengguna']; ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                              </div> -->

                              <div class="row justify-content-end">
                                  <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary">Update Data</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <!--/ Basic Bootstrap Table -->
              </div>
              <!-- / Content -->