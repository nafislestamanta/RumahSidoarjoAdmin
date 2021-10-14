  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5><i class="fas fa-trophy"></i></i><b style="padding-left:5px">Lomba Dan Budaya</b></h5>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('lombadanbudaya/tambah_lomba'); ?>" class="btn-sm btn-primary"><i
                              class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download"
                              style="padding-right: 8px;"></i>Report</a>
                  </div>
              </div>
              <div class="card-body">
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama Lomba</th>
                                      <th>Tanggal Publish</th>
                                      <th>Deskripsi</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                foreach ($lomba as $l) : ?>

                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $l->nama_lomba ?></td>
                                  <td><?= $l->tgl_publish ?></td>
                                  <td><?= word_limiter($l->deskripsi, 3); ?></td>
                                  <td>
                                      <a href="<?= base_url('lombadanbudaya/edit_lomba/' . $l->id_lomba); ?>"
                                          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                      </a>
                                      <a style="margin-left: 5px;"
                                          href="<?= base_url('lombadanbudaya/delete/' . $l->id_lomba); ?>"
                                          onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                          class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                      <a href="<?= base_url('lombadanbudaya/detail_lomba/' . $l->id_lomba); ?>"
                                          class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                      </a>
                                  </td>
                              </tr>
                              <?php endforeach; ?>

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>