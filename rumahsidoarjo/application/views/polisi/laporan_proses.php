  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-list-ol"></i><b> Data Pengaduan Polisi</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php if ($title == "Laporan Kriminal") : ?>
                  Kriminal
                  <?php elseif ($title == "Laporan Kecelakaan") : ?>
                  Kecelakaan
                  <?php elseif ($title == "Laporan Bencana") : ?>
                  Bencana
                  <?php else : ?>
                  Kategori
                  <?php endif; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('Polisi/laporan'); ?>">Semua</a>
                  <a class="dropdown-item" href="<?= base_url('Polisi/laporankriminal'); ?>">Kriminal</a>
                  <a class="dropdown-item" href="<?= base_url('Polisi/laporankecelakaan'); ?>">Kecelakaan</a>
                  <a class="dropdown-item" href="<?= base_url('Polisi/laporanbencana'); ?>">Bencana</a>
              </div>
              <a style="float: right;" href="<?= base_url('Pdf/pdf'); ?>" target="_blank" class="btn btn-primary"><i
                      class="fas fa-download" style="padding-right: 5px;"></i>Report</a>

          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>ID Laporan</th>
                                  <th>Kategori</th>
                                  <th>Nama Pelapor</th>
                                  <th>Lokasi Kejadian</th>
                                  <th>Waktu Kejadian</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </b> </tr>
                      </thead>
                      <tbody class="text-center">
                          <?php if ($title == "Laporan Kriminal") :
                                foreach ($kriminal as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->satus ?></td>
                              <td>

                                  <a href="<?= base_url('Polisi/edit_pengaduan/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php endforeach; ?>

                          <?php elseif ($title == "Laporan Kecelakaan") :
                                foreach ($kecelakaan as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->status ?></td>
                              <td>
                                  <a href="<?= base_url('Polisi/edit_pengaduan/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php endforeach; ?>

                          <?php elseif ($title == "Laporan Bencana") :
                                foreach ($bencana as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->status ?></td>
                              <td>
                                  <a href="<?= base_url('Polisi/edit_pengaduan/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php endforeach; ?>

                          <?php else :
                                foreach ($laporan as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->status ?></td>
                              <td>
                                  <a href="<?= base_url('Polisi/edit_pengaduan/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                  </a>
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