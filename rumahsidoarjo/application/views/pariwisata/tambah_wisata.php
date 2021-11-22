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
                  <?php if ($title == 'Tempat Wisata') : ?>
                  <form action="<?= base_url('Pariwisata/simpanWisata'); ?>" method="post"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label for="enum">
                                      <h6 class="m-0 font-weight-bold text-dark">Kategori Wisata</h6>
                                  </label>
                                  <select class="form-control" name="kategori" id="kategori">
                                      <option value="" selected disabled>Kategori</option>
                                      <?php foreach ($kategori as $k) : ?>
                                      <option value="<?= $k->id_kategori_wisata ?>"><?= $k->kategori ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                  <?= form_error('kategori', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Nama Wisata</label>
                                  <input type="text" class="form-control" id="nama" name="nama"
                                      placeholder="Masukkan Nama Wisata" value="<?= set_value('nama') ?>">
                                  <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Alamat</label>
                                  <input type="text" class="form-control" id="alamat" name="alamat"
                                      placeholder="Masukkan Alamat" value="<?= set_value('alamat') ?>">
                                  <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>No Telepon</label>
                                  <input type="number" maxlength="13" class="form-control" id="notelp" name="notelp"
                                      placeholder="Masukkan No Telepon" value="<?= set_value('notelp') ?>">
                                  <?= form_error('notelp', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <!-- text input -->
                          <label>Jam Buka</label>
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <input type="time" class="form-control" id="jambuka" name="jambuka"
                                      placeholder="Jam Buka" value="<?= set_value('jambuka') ?>">
                                  <?= form_error('jambuka', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <!-- text input -->
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label>Jam Tutup</label>
                                  <input type="time" class="form-control" id="jamtutup" name="jamtutup"
                                      placeholder="Jam Tutup" value="<?= set_value('jamtutup') ?>">
                                  <?= form_error('jamtutup', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Latitude</label>
                                  <input type="number" class="form-control" id="lat" name="lat"
                                      placeholder="Masukkan Latitude" value="<?= set_value('lat') ?>">
                                  <?= form_error('lat', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Longitude</label>
                                  <input type="number" class="form-control" id="long" name="long"
                                      placeholder="Masukkan Longitude" value="<?= set_value('long') ?>">
                                  <?= form_error('long', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label>Pilih Gambar</label> <br>
                          <input type="file" id="gambar" name="gambar" accept="image/png, .jpeg, .jpg"
                              onchange="gambar(this.value)">
                          <img src="holder.jpg" id="foto" width="150px">
                          <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>

                      <div class="form-group">
                          <label>Pilih Gambar</label> <br>
                          <input type="file" id="gambar1" name="gambar1" accept="image/png, .jpeg, .jpg"
                              onchange="gambar(this.value)">
                          <img src="holder.jpg" id="foto" width="150px">
                      </div>

                      <div class="form-group">
                          <label>Pilih Gambar</label> <br>
                          <input type="file" id="gambar2" name="gambar2" accept="image/png, .jpeg, .jpg"
                              onchange="gambar(this.value)">
                          <img src="holder.jpg" id="foto" width="150px">
                      </div>

                      <button type="submit" class="btn btn-primary ">Simpan</button>
                      <a href="<?= base_url('Pariwisata') ?>" class="btn btn-success"> Kembali</a>
                      <br>
                      <br>
                  </form>

                  <?php elseif ($title == 'Tambah Wisata Sidoarjo') : ?>
                  <?= $this->session->flashdata('message'); ?>
                  <h1 class="h3 mb-0 font-weight-bold text-dark">Tarif Tiket Wisata</h1>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama Tiket</th>
                                      <th>Tarif</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $t->nama_tiket ?></td>
                                  <td><?= $t->tarif ?></td>
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
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto1); ?>"
                                          alt=""></td>
                              </tr>
                              <tr>
                                  <td>Foto Kedua</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto2); ?>"
                                          alt=""></td>
                              </tr>
                              <tr>
                                  <td>Foto Ketiga</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto3); ?>"
                                          alt=""></td>
                              </tr>
                          </thead>
                      </table>
                  </div>

                  <?php elseif ($title == 'Tambah Wisata Kuliner') : ?>
                  <?= $this->session->flashdata('message'); ?>
                  <h1 class="h3 mb-0 font-weight-bold text-dark">Menu Kuliner</h1>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama Menu</th>
                                      <th>Harga</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $t->nama ?></td>
                                  <td><?= $t->harga ?></td>
                              </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                  <br>
                  <?php if ($count->total == 5) : ?>
                  <a href="<?= base_url('Pariwisata'); ?>" class="btn btn-success">Simpan</a>
                  <?php else : ?>
                  <a data-toggle="modal" type="submit" data-target="#tambah-datakuliner"
                      class="btn btn-primary">Tambah</a>
                  <?php endif; ?>


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
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto1); ?>"
                                          alt=""></td>
                              </tr>
                              <tr>
                                  <td>Foto Kedua</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto2); ?>"
                                          alt=""></td>
                              </tr>
                              <tr>
                                  <td>Foto Ketiga</td>
                                  <td><img width="100" height="100" src="<?= base_url('assets/img/' . $desc->foto3); ?>"
                                          alt=""></td>
                              </tr>
                          </thead>
                      </table>
                  </div>
                  <?php endif; ?>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data"
      class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                  <h4 class="modal-title">Tambah Data Tarif</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Pariwisata/tambah_tarif') ?>" method="post"
                  enctype="multipart/form-data" role="form">
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

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datakuliner"
      class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                  <h4 class="modal-title">Tambah Menu Kuliner</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Pariwisata/tambah_kuliner') ?>" method="post"
                  enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <input type="text" hidden name="id" id="id" value="<?= $desc->id_wisata ?>">
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Nama Menu</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="nama" placeholder="Tuliskan Nama Menu">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Harga</label>
                          <div class="col-lg-10">
                              <input type="number" class="form-control" name="harga" placeholder="Tuliskan Harga Menu">
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

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Tarif</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Pariwisata/tambah_tarif') ?>" method="post"
                  enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Nama Tiket</label>
                          <div class="col-lg-10">
                              <input type="text" name="id_tarif" id="id_tarif" hidden>
                              <input type="text" class="form-control" name="nama_tiket" id="nama_tiket"
                                  placeholder="Tuliskan Nama Tiket">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Tarif Tiket</label>
                          <div class="col-lg-10">
                              <input type="number" class="form-control" name="tarif" id="tarif"
                                  placeholder="Tuliskan Tarif Tiket">
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
  </div>


  <!-- END Modal Tambah -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function gambar(val) {
    $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>