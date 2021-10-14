  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data Tempat Wisata</h1>
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <?= $this->session->flashdata('message'); ?>
                  <h1 class="h3 mb-0 font-weight-bold text-dark">Tarif Tiket Wisata</h1>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama Tiket</th>
                                      <th>Tarif</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                foreach ($tampil as $t) :
                                    $t->id_wisata == $desc->id_wisata;
                                ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $t->nama_tiket ?></td>
                                      <td><?= $t->tarif ?></td>
                                      <td class="text-center">
                                          <a href="#" data-id="<?= $t->id_tarif ?>" data-nama="<?= $t->nama_tiket ?>" data-toggle="modal" data-target="#edit-data">
                                              <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button></a>
                                          <a href="<?= base_url('Pariwisata/delete_tarif/' . $t->id_tarif); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
                                          </a>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                  <br>
                  <a data-toggle="modal" type="submit" data-target="#tambah-data" class="btn btn-primary">Tambah</a>
                  <a href="<?= base_url('Pariwisata'); ?>" class="btn btn-success">Simpan</a>
                  <br>
                  <br>

                  <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <td>Kategori</td>
                                  <td><?= $desc->kategori; ?></td>
                              </tr>
                              <tr>
                                  <td>Nama Wisata</td>
                                  <td><?= $desc->nama_wisata; ?></td>
                              </tr>
                              <tr>
                                  <td>Alamat</td>
                                  <td><?= $desc->alamat; ?></td>
                              </tr>
                              <tr>
                                  <td>No Telepon</td>
                                  <td><?= $desc->no_telepon; ?></td>
                              </tr>
                              <tr>
                                  <td>Jam Wisata</td>
                                  <td><?= $desc->jam_buka; ?> - <?= $desc->jam_tutup; ?></td>
                              </tr>
                              <tr>
                                  <td>Latitude</td>
                                  <td><?= $desc->lat; ?></td>
                              </tr>
                              <tr>
                                  <td>Longitude</td>
                                  <td><?= $desc->long; ?></td>
                              </tr>
                              <tr>
                                  <td>Foto Pertama</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto1); ?>" alt=""></td>
                              </tr>
                              <tr>
                                  <td>Foto Kedua</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto2); ?>" alt=""></td>
                              </tr>
                              <tr>
                                  <td>Foto Ketiga</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto3); ?>" alt=""></td>
                              </tr>
                          </thead>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Tarif</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Pariwisata/tambah_tarif') ?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <input type="text" hidden name="id" id="id" value="<?= $desc->id_wisata ?>">
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Nama Tiket</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="nama" placeholder="Tuliskan Nama Tiket">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Tarif Tiket</label>
                          <div class="col-lg-10">
                              <input type="number" class="form-control" name="tarif" placeholder="Tuliskan Tarif Tiket">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
      function gambar(val) {
          $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
      }
  </script>