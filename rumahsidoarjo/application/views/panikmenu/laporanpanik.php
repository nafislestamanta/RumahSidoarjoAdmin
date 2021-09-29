  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-users"></i><b> Data Pengaduan</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporanKriminal'); ?>">Kriminal</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporankecelakaan'); ?>">Kecelakaan</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/laporanBencana'); ?>">Bencana</a>
              </div>
              <a style="float: right;" href="<?= base_url('Pdf/pdf'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-download" style="padding-right: 5px;"></i>Report</a>

          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>Kode Laporan</th>
                                  <th>NIK Pelapor</th>
                                  <th>Nama Pelapor</th>
                                  <th>Kategori</th>
                                  <th>Lokasi Kejadian</th>
                                  <th>Waktu Kejadian</th>
                                  <th>Bukti Kejadian</th>
                                  <th>Deskripsi/Catatan</th>
                                  <th>Kantor Pengaduan</th>
                                  <th>Actions</th>

                              </b> </tr>
                      </thead>

                      <tbody>
                          <?php if ($title == "Laporan Kriminal") :
                                foreach ($Kriminal as $k) : ?>
                                  <tr>
                                      <td><?= $k->id_laporan ?></td>
                                      <td><?= $k->NIK ?></td>
                                      <td><?= $k->nama ?></td>
                                      <td><?= $k->kategori ?></td>
                                      <td><?= $k->lokasi_kejadian ?></td>
                                      <td><?= $k->waktu_kejadian ?></td>
                                      <td><?= $k->bukti_kejadian ?></td>
                                      <td><?= $k->deskripsi ?></td>
                                      <td><?= $k->kantor_pengaduan ?></td>
                                      <td><a href="<?= base_url('PanikMenu/delete_laporanKriminal/' . $k->id_laporan); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>
                              <?php endforeach; ?>

                              <?php elseif ($title == "Laporan Kecelakaan") :
                                foreach ($kecelakaan as $kcl) : ?>
                                  <tr>
                                      <td><?= $kcl->id_laporan ?></td>
                                      <td><?= $kcl->NIK ?></td>
                                      <td><?= $kcl->nama ?></td>
                                      <td><?= $kcl->kategori ?></td>
                                      <td><?= $kcl->lokasi_kejadian ?></td>
                                      <td><?= $kcl->waktu_kejadian ?></td>
                                      <td><?= $kcl->bukti_kejadian ?></td>
                                      <td><?= $kcl->deskripsi ?></td>
                                      <td><?= $kcl->kantor_pengaduan ?></td>
                                      <td><a href="<?= base_url('PanikMenu/delete_laporankecelakaan/' . $kcl->id_laporan); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>
                              <?php endforeach; ?>

                              <?php elseif ($title == "Laporan Bencana") :
                                foreach ($Bencana as $kbr) : ?>
                                  <tr>
                                      <td><?= $kbr->id_laporan ?></td>
                                      <td><?= $kbr->NIK ?></td>
                                      <td><?= $kbr->nama ?></td>
                                      <td><?= $kbr->kategori ?></td>
                                      <td><?= $kbr->lokasi_kejadian ?></td>
                                      <td><?= $kbr->waktu_kejadian ?></td>
                                      <td><?= $kbr->bukti_kejadian ?></td>
                                      <td><?= $kbr->deskripsi ?></td>
                                      <td><?= $kbr->kantor_pengaduan ?></td>
                                      <td><a href="<?= base_url('PanikMenu/delete_laporanBencana/' . $kbr->id_laporan); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>
                              <?php endforeach; ?>

                              <?php else :
                                foreach ($laporan as $l) : ?>
                                  <tr>
                                      <td><?= $l->id_laporan ?></td>
                                      <td><?= $l->NIK ?></td>
                                      <td><?= $l->nama ?></td>
                                      <td><?= $l->kategori ?></td>
                                      <td><?= $l->lokasi_kejadian ?></td>
                                      <td><?= $l->waktu_kejadian ?></td>
                                      <td><?= $l->bukti_kejadian ?></td>
                                      <td><?= $l->deskripsi ?></td>
                                      <td><?= $l->kantor_pengaduan ?></td>
                                      <td><a href="<?= base_url('PanikMenu/delete_laporan/' . $l->id_laporan); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>
                              <?php endforeach; ?>
                          <?php endif; ?>





                          </tr>
                  </table>
              </div>
          </div>
      </div>
  </div>