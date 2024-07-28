          <div class="content-wrapper">
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                  <!-- Basic Bootstrap Table -->
                  <div class="card">
                      <h5 class="card-header">
                          <a href="<?= base_url; ?>/barang" class="btn rounded-pill btn-primary">
                              <i class="tf-icons bx bx-arrow-back bx-18px me-2"></i>Back</button>
                          </a>
                          Tambah Barang
                      </h5>
                      <div class="card-body">
                          <form role="form" action="<?= base_url; ?>/barang/simpanBarang" method="POST" enctype="multipart/form-data">
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-nama-barang">Nama Barang</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="NamaBarang" class="form-control" id="basic-default-nama-barang" placeholder="Laptop .." required>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-keterangan">Keterangan</label>
                                  <div class="col-sm-10">
                                      <textarea name="Keterangan" id="basic-default-keterangan" class="form-control" placeholder="Model ..." aria-label="Model ..." aria-describedby="basic-icon-default-keterangan2" required></textarea>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">Satuan</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="Satuan" class="form-control" id="basic-default-satuan" placeholder=" ..." required>
                                  </div>
                              </div>

                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-nama-pengguna">Nama Pengguna</label>
                                  <div class="col-sm-10">
                                      <select id="idpengguna" name="IdPengguna" class="form-select" required>
                                          <option value="">Pilih Pengguna</option>
                                          <?php foreach ($data['pengguna'] as $row) : ?>
                                              <option value="<?= $row['IdPengguna']; ?>"><?= $row['NamaPengguna']; ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                              </div>

                              <div class="row justify-content-end">
                                  <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary">Simpan Data</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <!--/ Basic Bootstrap Table -->
              </div>
              <!-- / Content -->