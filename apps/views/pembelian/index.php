          <div class="content-wrapper">
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                  <!-- Basic Bootstrap Table -->
                  <div class="card">
                      <h5 class="card-header">
                          <a href="<?= base_url; ?>/pembelian/tambah" class="btn rounded-pill btn-primary">
                              <i class="tf-icons bx bx-plus bx-18px me-2"></i>Add</button>
                          </a>
                          Table Pembelian
                      </h5>
                      <div class="table-responsive text-nowrap">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>ID Pembelian</th>
                                      <th>Jumlah Pembelian</th>
                                      <th>Harga Beli</th>
                                      <th>ID Pengguna</th>
                                      <th>ID Barang</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                  <tr>
                                      <?php
                                        foreach ($data['pembelian'] as $key => $data) {
                                        ?>
                                          <td> <?= $data["IdPembelian"] ?> </td>
                                          <td> <?= $data["JumlahPembelian"] ?> </td>
                                          <td> <?= $data["HargaBeli"] ?> </td>
                                          <td> <?= $data["IdPengguna"] ?> </td>
                                          <td> <?= $data["IdBarang"] ?> </td>
                                          <td>
                                              <div class="dropdown">
                                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                      <i class="bx bx-dots-vertical-rounded"></i>
                                                  </button>
                                                  <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="<?= base_url; ?>/pelanggan/edit/<?= $data['IdPelanggan'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                      <a class="dropdown-item" href="<?= base_url; ?>/pelanggan/hapus/<?= $data['IdPelanggan'] ?>" onclick="return confirm('Hapus data?');"><i class="bx bx-trash me-1"></i> Delete</a>
                                                  </div>
                                              </div>
                                          </td>
                                  </tr>
                              <?php
                                        }
                                ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <!--/ Basic Bootstrap Table -->
              </div>
              <!-- / Content -->