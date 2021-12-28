  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-video"></i><b style="padding-left:5px">CCTV</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('Dishub/addcctv'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                              style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url('Dishub/addcctv'); ?>" class="btn-sm btn-success"><i class="fas fa-download"
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
                                      <th>Nama CCTV </th>
                                      <th>Alamat</th>
                                      <th>Status</th>
                                      <th>Link</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody class="text-center">
                              <?php $no = 1;
                                if ($title == "Cctv") :
                                    foreach ($tampil as $b) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $b->nama ?></td>
                                  <td><?= word_limiter($b->alamat, 3); ?></td>
                                  <td><?= $b->status ?></td>
                                  <td><?= word_limiter($b->link, 3); ?></td>
                                  <td><a href="<?= base_url('Dishub/editcctv/' . $b->id_cctv); ?>"
                                          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                      <a style="margin-left: 5px;"
                                          href="<?= base_url('Dishub/delete/' . $b->id_cctv); ?>"
                                          onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                          class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
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