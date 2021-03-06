  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-users"></i><b> Data Pengaduan</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a class="btn-sm btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporanpanik'); ?>">Semua</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporankriminal'); ?>">Kriminal</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporankecelakaan'); ?>">Kecelakaan</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporanBencana'); ?>">Bencana</a>
              </div>

              <?php if ($title == "Laporan Kriminal") : ?>
                  <a href="<?= base_url('PanikMenu/pdf_kategori/' . $kategori->kategori); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
              <?php elseif ($title == "Laporan Kecelakaan") : ?>
                  <a href="<?= base_url('PanikMenu/pdf_kategori/' . $kategori->kategori); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
              <?php elseif ($title == "Laporan Bencana") : ?>
                  <a href="<?= base_url('PanikMenu/pdf_kategori/' . $kategori->kategori); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
              <?php else : ?>
                  <a href="<?= base_url('PanikMenu/pdf_pengaduan'); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
              <?php endif; ?>

          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>No</th>
                                  <th>Kategori</th>
                                  <th>Nama Pelapor</th>
                                  <th>Latitude</th>
                                  <th>Longitude</th>
                                  <th>Waktu Kejadian</th>
                                  <th>Petugas</th>
                                  <!-- <th>Status</th> -->
                              </b> </tr>
                      </thead>
                      <tbody class="text-center">
                          <?php $no = 1;
                            if ($title == "Laporan Kriminal") :
                                foreach ($kriminal as $k) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $k->kategori ?></td>
                                      <td><?= $k->nama ?></td>
                                      <td><?= $k->lat ?></td>
                                      <td><?= $k->long ?></td>
                                      <td><?= $k->waktu_kejadian ?></td>
                                      <td><?= $k->petugas ?></td>
                                      <!-- <td><?= $status->status ?></td> -->
                                  </tr>
                              <?php endforeach; ?>

                              <?php elseif ($title == "Laporan Kecelakaan") :
                                foreach ($kecelakaan as $k) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $k->kategori ?></td>
                                      <td><?= $k->nama ?></td>
                                      <td><?= $k->lat ?></td>
                                      <td><?= $k->long ?></td>
                                      <td><?= $k->waktu_kejadian ?></td>
                                      <td><?= $k->petugas ?></td>
                                      <!-- <td><?= $status->status ?></td> -->
                                  </tr>
                              <?php endforeach; ?>

                              <?php elseif ($title == "Laporan Bencana") :
                                foreach ($bencana as $k) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $k->kategori ?></td>
                                      <td><?= $k->nama ?></td>
                                      <td><?= $k->lat ?></td>
                                      <td><?= $k->long ?></td>
                                      <td><?= $k->waktu_kejadian ?></td>
                                      <td><?= $k->petugas ?></td>
                                      <!-- <td><?= $status->status ?></td> -->
                                  </tr>
                              <?php endforeach; ?>

                              <?php else :
                                foreach ($laporan as $k) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $k->kategori ?></td>
                                      <td><?= $k->nama ?></td>
                                      <td><?= $k->lat ?></td>
                                      <td><?= $k->long ?></td>
                                      <td><?= $k->waktu_kejadian ?></td>
                                      <td><?= $k->petugas ?></td>
                                      <!-- <td><?= $status->status ?></td> -->
                                  </tr>
                              <?php endforeach; ?>
                          <?php endif; ?>
                          </tr>
                  </table>
              </div>
          </div>
      </div>
  </div>