  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-graduation-cap"></i><b style="padding-left:5px">PENDIDIKAN / SMP</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('pendidikan/tambah_smp'); ?>" class="btn-sm btn-primary"><i
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
                                      <th>Nama SMP</th>
                                      <th>Kecamatan</th>
                                      <th>Alamat</th>
                                      <th>No Telepon</th>
                                      <th>Akreditasi</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </b> </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                foreach ($tampil as $t) : ?>
                              <tr class="text-center">
                                  <td><?= $no++ ?></td>
                                  <td><?= $t->nama_sekolah ?></td>
                                  <td><?= $t->kecamatan ?></td>
                                  <td><?= word_limiter($t->alamat, 3)  ?></td>
                                  <td><?= $t->no_telepon ?></td>
                                  <td><?= $t->akreditasi ?></td>
                                  <td><?= $t->status ?></td>
                                  <td class="text-center">
                                      <a href="<?= base_url('Pendidikan/edit_smp/' . $t->id_sekolah); ?>"
                                          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                      <a href="<?= base_url('Pendidikan/detail_slb/' . $t->id_sekolah); ?>"
                                          class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                      <a style="margin-left: 5px;"
                                          href="<?= base_url('Pendidikan/delete_smp/' . $t->id_sekolah); ?>"
                                          onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                          class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                  </td>
                              </tr>
                              <?php endforeach; ?>

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>