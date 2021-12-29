  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-users"></i><b> Konfirmasi Laporan Pengaduan</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a class="btn-sm btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php if ($title == "Konfirmasi Laporan Kriminal") : ?>
                  Kriminal
                  <?php elseif ($title == "Konfirmasi Laporan Kecelakaan") : ?>
                  Kecelakaan
                  <?php elseif ($title == "Konfirmasi Laporan Bencana") : ?>
                  Bencana
                  <?php else : ?>
                  Kategori
                  <?php endif; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/konfirmasi'); ?>">Semua</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/konfirmasiKriminal'); ?>">Kriminal</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/konfirmasiKecelakaan'); ?>">Kecelakaan</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/konfirmasiBencana'); ?>">Bencana</a>
              </div>
              <!-- <a style="float: right;" href="<?= base_url('Pdf/pdf'); ?>" target="_blank" class="btn-sm btn-primary"><i
                      class="fas fa-download" style="padding-right: 5px;"></i>Report</a> -->

          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>Kode Laporan</th>
                                  <th>Kategori</th>
                                  <th>Nama Pelapor</th>
                                  <th>Lokasi Kejadian</th>
                                  <th>Waktu Kejadian</th>
                                  <th>Petugas</th>
                                  <th>Actions</th>

                              </b> </tr>
                      </thead>

                      <tbody class="text-center">
                          <?php if ($title == "Konfirmasi Laporan Kriminal") :
                                foreach ($kriminal as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->petugas ?></td>
                              <td><a href="<?= base_url('PanikMenu/delete_Bencanaa/' . $k->id_laporan); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                  <a href="<?= base_url('PanikMenu/detail_konfirmasi/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <?php endforeach; ?>

                          <?php elseif ($title == "Konfirmasi Laporan Kecelakaan") :
                                foreach ($kecelakaan as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->petugas ?></td>
                              <td><a href="<?= base_url('PanikMenu/delete_Bencanaa/' . $k->id_laporan); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                  <a href="<?= base_url('PanikMenu/detail_konfirmasi/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <?php endforeach; ?>

                          <?php elseif ($title == "Konfirmasi Laporan Bencana") :
                                foreach ($bencana as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->petugas ?></td>
                              <td><a href="<?= base_url('PanikMenu/delete_Bencanaa/' . $k->id_laporan); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                  <a href="<?= base_url('PanikMenu/detail_konfirmasi/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <?php endforeach; ?>

                          <?php else :
                                foreach ($konfirmasi as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->petugas ?></td>
                              <td><a href="<?= base_url('PanikMenu/delete_Bencanaa/' . $k->id_laporan); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                  <a href="<?= base_url('PanikMenu/detail_konfirmasi/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                          </tr>
                  </table>
              </div>
          </div>
      </div>
  </div>