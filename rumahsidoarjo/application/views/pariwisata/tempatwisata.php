  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-tree"></i><b style="padding-left:5px">TEMPAT WISATA</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('pariwisata/tambah_wisata'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
                  </div>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <?= $this->session->flashdata('message'); ?>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Kategori</th>
                                      <th>Nama Wisata</th>
                                      <th>Alamat</th>
                                      <th>No Telepon</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                foreach ($tampil as $t) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $t->kategori ?></td>
                                      <td><?= $t->nama_wisata ?></td>
                                      <td><?= word_limiter($t->alamat, 2) ?></td>
                                      <td><?= $t->no_telepon ?></td>
                                      <td class="text-center">
                                          <a href="<?= base_url('Pariwisata/edit_wisata/' . $t->id_wisata); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                          <a href="<?= base_url('Pariwisata/detail_wisata/' . $t->id_wisata); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                          <a href="<?= base_url('Pariwisata/delete_wisata/' . $t->id_wisata); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
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