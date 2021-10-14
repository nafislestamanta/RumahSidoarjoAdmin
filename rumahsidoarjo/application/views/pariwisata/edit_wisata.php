  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Data Tempat Wisata</h1>
    </div>

    <!-- Content -->
    <div class="col">
      <div class="card card-primary">
        <div class="card-body">
          <form action="<?= base_url('Pariwisata/saveEdit/' . $edit->id_wisata); ?>" method="post" enctype="multipart/form-data">
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
                      <option value="<?= $k->id_kategori_wisata ?>" <?php if ($k->id_kategori_wisata == $edit->id_kategori_wisata) echo 'selected'; ?>><?= $k->kategori ?></option>
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
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Wisata" value="<?= $edit->nama_wisata ?>">
                  <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id=alamat"" name="alamat" placeholder="Masukkan Alamat" value="<?= $edit->alamat ?>">
                  <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="number" maxlength="13" class="form-control" id="notelp" name="notelp" placeholder="Masukkan No Telepon" value="<?= $edit->no_telepon ?>">
                  <?= form_error('notelp', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- text input -->
              <label>Jam Buka</label>
              <div class="col-sm-12">
                <div class="form-group">
                  <input type="time" class="form-control" id="jambuka" name="jambuka" placeholder="Jam Buka" value="<?= $edit->jam_buka ?>">
                  <?= form_error('jambuka', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- text input -->
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Jam Tutup</label>
                  <input type="time" class="form-control" id="jamtutup" name="jamtutup" placeholder="Jam Tutup" value="<?= $edit->jam_tutup ?>">
                  <?= form_error('jamtutup', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Latitude</label>
                  <input type="number" class="form-control" id="lat" name="lat" placeholder="Masukkan Latitude" value="<?= $edit->lat ?>">
                  <?= form_error('lat', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Longitude</label>
                  <input type="number" class="form-control" id="long" name="long" placeholder="Masukkan Longitude" value="<?= $edit->long ?>">
                  <?= form_error('long', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <?= $this->session->flashdata('alert'); ?>
            <div class="form-group">
              <label>Foto Pertama</label> <br>
              <img src="<?= base_url('assets/img/' . $edit->foto1); ?>" id="foto" width="150px">
              <a data-toggle="modal" type="submit" data-target="#editmodalgambar<?= $edit->id_wisata ?>" class="btn btn-primary">Edit</a>
              <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
            </div>

            <div class="form-group">
              <label>Foto Kedua</label> <br>
              <?php if ($edit->foto2) : ?>
                <img src="<?= base_url('assets/img/' . $edit->foto2); ?>" id="foto" width="150px">
                <a data-toggle="modal" type="submit" data-target="#editmodalgambar2<?= $edit->id_wisata ?>" class="btn btn-primary">Edit</a>
              <?php else : ?>
                <a data-toggle="modal" type="submit" data-target="#editmodalgambar2<?= $edit->id_wisata ?>" class="btn btn-primary">Tambah</a>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label>Foto Ketiga</label> <br>
              <?php if ($edit->foto3) : ?>
                <img src="<?= base_url('assets/img/' . $edit->foto3); ?>" id="foto" width="150px">
                <a data-toggle="modal" type="submit" data-target="#editmodalgambar3<?= $edit->id_wisata ?>" class="btn btn-primary">Edit</a>
              <?php else : ?>
                <a data-toggle="modal" type="submit" data-target="#editmodalgambar3<?= $edit->id_wisata ?>" class="btn btn-primary">Tambah</a>
              <?php endif; ?>
            </div>
            <br>

            <?= $this->session->flashdata('message'); ?>
            <?php if ($edit->kategori != 'kuliner') : ?>
              <h1 class="h3 mb-0 font-weight-bold text-dark">Tarif Tiket Wisata</h1>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center"><b>
                        <th>Nama Tiket</th>
                        <th>Tarif</th>
                        <th>Action</th>
                      </b>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    foreach ($edits as $t) : ?>
                      <tr>
                        <td><?= $t->nama_tiket ?></td>
                        <td><?= $t->tarif ?></td>
                        <td> <a data-toggle="modal" type="submit" data-target="#editmodal<?= $t->id_tarif ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= base_url('Pariwisata/delete/' . $t->id_tarif . '/' . $t->id_wisata); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <br>
              <button type="submit" class="btn btn-success">Simpan</button>
              <a data-toggle="modal" type="submit" data-target="#tambah-data" class="btn btn-primary">Tambah Tarif</a>

            <?php else : ?>
              <h1 class="h3 mb-0 font-weight-bold text-dark">Menu Kuliner</h1>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center"><b>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </b>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    foreach ($kuliner as $t) : ?>
                      <tr>
                        <td><?= $t->nama ?></td>
                        <td><?= $t->harga ?></td>
                        <td> <a data-toggle="modal" type="submit" data-target="#editmodalkuliner<?= $t->id_kuliner ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= base_url('Pariwisata/delete_kuliner/' . $t->id_kuliner . '/' . $t->id_wisata); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <br>
              <?php if ($countku->total == 5) : ?>
                <button type="submit" class="btn btn-success">Simpan</button>
              <?php else : ?>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a data-toggle="modal" type="submit" data-target="#tambah-datakuliner" class="btn btn-primary">Tambah Menu</a>
              <?php endif; ?>
            <?php endif; ?>
            <br>
            <br>

        </div>
      </div>
    </div>
  </div>
  </form>

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
          <h4 class="modal-title">Tambah Data Tarif</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pariwisata/tambah_tarif_wisata') ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <input type="text" hidden name="id" id="id" value="<?= $edit->id_wisata ?>">
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
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datakuliner" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
          <h4 class="modal-title">Tambah Menu Kuliner</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pariwisata/tambah_kuliner_wisata') ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <input type="text" hidden name="id" id="id" value="<?= $edit->id_wisata ?>">
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
  <?php foreach ($edits as $t) : ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodal<?= $t->id_tarif ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Data Tarif</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('Pariwisata/simpanTarif/' . $edit->id_wisata) ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label class="col-lg-5 col-sm-5 control-label">Nama Tiket</label>
                <div class="col-lg-10">
                  <input type="text" name="id_tarif" id="id_tarif" value="<?= $t->id_tarif ?>" hidden>
                  <input type="text" class="form-control" name="nama_tiket" id="nama_tiket" value="<?= $t->nama_tiket ?>" placeholder="Tuliskan Nama Tiket">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-5 col-sm-5 control-label">Tarif Tiket</label>
                <div class="col-lg-10">
                  <input type="number" class="form-control" name="tarif" id="tarif" value="<?= $t->tarif ?>" placeholder="Tuliskan Tarif Tiket">
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
  <?php endforeach; ?>
  <!-- END Modal Tambah -->

  <!-- Modal Tambah -->
  <?php foreach ($kuliner as $t) : ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalkuliner<?= $t->id_kuliner ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Menu</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('Pariwisata/simpanKuliner/' . $edit->id_wisata) ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label class="col-lg-5 col-sm-5 control-label">Nama Tiket</label>
                <div class="col-lg-10">
                  <input type="text" name="id_kuliner" id="id_kuliner" value="<?= $t->id_kuliner ?>" hidden>
                  <input type="text" class="form-control" name="nama" id="nama" value="<?= $t->nama ?>" placeholder="Tuliskan Nama Menu">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-5 col-sm-5 control-label">Harga Menu</label>
                <div class="col-lg-10">
                  <input type="number" class="form-control" name="harga" id="harga" value="<?= $t->harga ?>" placeholder="Tuliskan Harga Menu">
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
  <?php endforeach; ?>
  <!-- END Modal Tambah -->

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalgambar<?= $edit->id_wisata ?>" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Gambar</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pariwisata/simpanGambar1/' . $edit->id_wisata) ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <div class="col-lg-10">
                <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                <img src="<?= base_url('assets/img/' . $edit->foto1); ?>" id="foto" width="150px">
              </div>
              <br>
              <input type="file" id="gambar" name="gambar" accept="image/png, .jpeg, .jpg" onchange="gambar1(this.value)">
              <div class="col-lg-10">
                <br>
                <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                <img src="holder.jpg" id="foto1" width="150px">
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
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalgambar2<?= $edit->id_wisata ?>" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Gambar</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pariwisata/simpanGambar2/' . $edit->id_wisata) ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <?php if ($edit->foto2) : ?>
                <div class="col-lg-10">
                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                  <img src="<?= base_url('assets/img/' . $edit->foto2); ?>" id="foto" width="150px">
                </div>
              <?php else : ?>
              <?php endif; ?>
              <input type="file" id="gambar2" name="gambar2" accept="image/png, .jpeg, .jpg" onchange="gambar22(this.value)">
              <div class="col-lg-10">
                <br>
                <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                <img src="holder.jpg" id="foto2" width="150px">
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
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalgambar3<?= $edit->id_wisata ?>" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Gambar</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pariwisata/simpanGambar3/' . $edit->id_wisata) ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <?php if ($edit->foto3) : ?>
                <div class="col-lg-10">
                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                  <img src="<?= base_url('assets/img/' . $edit->foto3); ?>" id="foto" width="150px">
                </div>
              <?php else : ?>
              <?php endif; ?>
              <input type="file" id="gambar3" name="gambar3" accept="image/png, .jpeg, .jpg" onchange="gambar33(this.value)">
              <div class="col-lg-10">
                <br>
                <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                <img src="holder.jpg" id="foto3" width="150px">
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
    function gambar1(val) {
      $("#foto1").attr('src', URL.createObjectURL(event.target.files[0]));
    }
  </script>

  <script type="text/javascript">
    function gambar22(val) {
      $("#foto2").attr('src', URL.createObjectURL(event.target.files[0]));
    }
  </script>

  <script type="text/javascript">
    function gambar33(val) {
      $("#foto3").attr('src', URL.createObjectURL(event.target.files[0]));
    }
  </script>