  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-phone-volume"></i><b> Data Pengaduan Bencana</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">

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
                          <?php if ($title == "Laporan") :
                                foreach ($laporan as $k) : ?>
                          <tr>
                              <td><?= $k->id_laporan ?></td>
                              <td><?= $k->kategori ?></td>
                              <td><?= $k->nama ?></td>
                              <td><?= $k->lokasi_kejadian ?></td>
                              <td><?= $k->waktu_kejadian ?></td>
                              <td><?= $k->status ?></td>
                              <td>

                                  <a href="<?= base_url('Bpbd/edit_pengaduan/' . $k->id_laporan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>