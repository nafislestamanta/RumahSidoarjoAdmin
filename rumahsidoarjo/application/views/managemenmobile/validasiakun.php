  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-id-badge"></i><b> VALIDASI AKUN</b></h5>
      </div>

      <!-- Begin Page Content -->


      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <!-- <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download"
                              style="padding-right: 8px;"></i>Report</a> -->
                  </div>
              </div>
              <div class="card-body">
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>NIK</th>
                                      <th>Nama</th>
                                      <th>Alamat</th>
                                      <th>No Telepon</th>
                                      <th>Action</th>

                                  </b> </tr>
                          </thead>

                          <tbody class="text-center">
                              <?php foreach ($user as $u) : ?>
                              <tr>
                                  <td><?= $u->NIK ?></td>
                                  <td><?= $u->nama ?></td>
                                  <td><?= $u->alamat ?></td>
                                  <td><?= $u->no_telepon ?></td>
                                  <td class="text-center">
                                      <a href="<?= base_url('Managemenmobile/detail_validasi/' . $u->NIK) ?>"
                                          class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>

                                  </td>
                              </tr>
                              <?php endforeach; ?>




                              </tr>
                      </table>
                  </div>
              </div>
          </div>


      </div>