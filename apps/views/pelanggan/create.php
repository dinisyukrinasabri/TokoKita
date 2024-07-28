          <div class="content-wrapper">
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                  <!-- Basic Bootstrap Table -->
                  <div class="card">
                      <h5 class="card-header">
                          <a href="<?= base_url; ?>/pelanggan" class="btn rounded-pill btn-primary">
                              <i class="tf-icons bx bx-arrow-back bx-18px me-2"></i>Back</button>
                          </a>
                          Tambah Pelanggan
                      </h5>
                      <div class="card-body">
                          <form role="form" action="<?= base_url; ?>/pelanggan/simpanPelanggan" method="POST" enctype="multipart/form-data">
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-nama-barang">Nama Pelanggan</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="NamaPelanggan" class="form-control" id="basic-default-nama-barang" placeholder="Nama Pelanggan .." required>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-keterangan">Nama Depan</label>
                                  <div class="col-sm-10">
                                      <textarea name="NamaDepan" id="basic-default-keterangan" class="form-control" placeholder="Nama Depan ..." aria-label="Nama Depan ..." aria-describedby="basic-icon-default-keterangan2" required></textarea>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">Nama Belakang</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="NamaBelakang" class="form-control" id="basic-default-satuan" placeholder="Nama Belakang ..." required>
                                  </div>
                              </div>

                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">No HP</label>
                                  <div class="col-sm-10">
                                      <input type="phone" name="NoHP" class="form-control" id="basic-default-satuan" placeholder="No HP ..." required>
                                  </div>
                              </div>

                              <div class="row mb-6">
                                  <label class="col-sm-2 col-form-label" for="basic-default-satuan">Alamat</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="Alamat" class="form-control" id="basic-default-satuan" placeholder="Alamat ..." required>
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