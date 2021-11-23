  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-server"></i><b>Data kantor BPBD</b></h5>
      </div>

      <!-- Content -->
      <!-- Begin Page Content -->

      <!-- Content -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a href="<?= base_url('Bpbd/tambah_kantor'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                      style="padding-right: 5px;"></i>Tambah Data</a>
          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>ID</th>
                                  <th>Nama Kantor</th>
                                  <th>Kecamatan</th>
                                  <th>Alamat</th>
                                  <th>Penanggung Jawab</th>
                                  <th>No Telepon</th>
                                  <th>Actions</th>
                              </b> </tr>
                      </thead>

                      <tbody class="text-center">
                          <?php if ($title == "Kantor") :
                                foreach ($tampil as $k) : ?>
                          <tr>
                              <td><?= $k->id_bpbd ?></td>
                              <td><?= word_limiter($k->nama, 3); ?></td>
                              <td><?= $k->kecamatan ?></td>
                              <td><?= word_limiter($k->alamat, 3); ?></td>
                              <td><?= word_limiter($k->penanggungjawab, 3); ?></td>
                              <td><?= $k->no_tlp ?></td>
                              <td><a href="<?= base_url('Bpbd/edit_kantor/' . $k->id_bpbd); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('Bpbd/detail_kantor/' . $k->id_bpbd); ?>"
                                      class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('Bpbd/delete_kantor/' . $k->id_bpbd); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                          </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                  </table>
              </div>
          </div>
      </div>
  </div>