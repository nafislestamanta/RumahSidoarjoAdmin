  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-stethoscope"></i><b style="padding-left:5px">Rumah Sakit Umum</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('kesehatan/tambahrsu'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
                  </div>
              </div>
              <div class="card-body">
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama RSU</th>
                                      <th>Alamat</th>
                                      <th>Pengelola</th>
                                      <th>No. Telepon</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php foreach ($rsu as $r) : ?>
                                  <tr>
                                      <td><?= $r->id_kesehatan ?></td>
                                      <td><?= $r->nama ?></td>
                                      <td><?= $r->alamat ?></td>
                                      <td><?= $r->kepemilikan ?></td>
                                      <td><?= $r->no_telepon ?></td>
                                      <td class="text-center">
                                          <a href="<?= base_url('Kesehatan/edit_rsu/' . $r->id_kesehatan); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a style="margin-left: 5px;" href="<?= base_url('Kesehatan/detail_rsu/' . $r->id_kesehatan); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a style="margin-left: 5px;" href="<?= base_url('Kesehatan/delete_rsu/' . $r->id_kesehatan); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>



                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>