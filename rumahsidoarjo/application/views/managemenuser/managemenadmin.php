  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-id-badge"></i><b> MANAGEMEN ADMIN</b></h5>
      </div>

      <!-- Begin Page Content -->


      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('Admin/tambah'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url('Admin/pdf'); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
                  </div>
              </div>
              <div class="card-body">
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>NIP</th>
                                      <th>Username</th>
                                      <th>Nama</th>
                                      <th>Alamat</th>
                                      <th>No Telepon</th>
                                      <th>Role</th>
                                      <th>Action</th>

                                  </b> </tr>
                          </thead>

                          <tbody>
                              <?php foreach ($user as $u) : ?>
                                  <tr>
                                      <td><?= $u->nip ?></td>
                                      <td><?= $u->username ?></td>
                                      <td><?= $u->nama ?></td>
                                      <td><?= word_limiter($u->alamat, 2); ?></td>
                                      <td><?= $u->no_tlp ?></td>
                                      <td><?= $u->nama_role ?></td>
                                      <td class="text-center">
                                          <a href="<?= base_url('Admin/edit/' . $u->id_admin) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                          <a href="<?= base_url('Admin/detail/' . $u->id_admin) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                          <a href="<?= base_url('Admin/delete/' . $u->id_admin) ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>


                                      </td>
                                  </tr>
                              <?php endforeach; ?>




                              </tr>
                      </table>
                  </div>
              </div>
          </div>


      </div>