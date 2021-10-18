  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Data SLB</h1>
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content -->
    <div class="col">
      <div class="card card-primary">
        <div class="card-body">
          <?= $this->session->flashdata('sd'); ?>
          <form action="<?php echo base_url('Pendidikan/saveSLB/' . $tampil->id_sekolah); ?> " method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">Nama SLB</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama SLB" value="<?= $tampil->nama_sekolah ?>">
                  <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label for="enum">
                    <h6 class="m-0 font-weight-bold text-dark">Kecamatan</h6>
                  </label>
                  <select class="form-control" name="kecamatan" id="kecamatan">
                    <option value="" selected disabled>- Pilih Kecamatan -</option>
                    <?php foreach ($kecamatan as $k) : ?>
                      <option value="<?= $k->id_kecamatan ?>" <?php if ($k->id_kecamatan == $tampil->id_kecamatan) echo 'selected'; ?>><?= $k->kecamatan ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?= form_error('kecamatan', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <input type="text" id="jenjang" hidden name="jenjang" value="<?= $tampil->jenjang ?>">

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label for="enum">
                    <h6 class="m-0 font-weight-bold text-dark">Kelurahan</h6>
                  </label>
                  <select class="form-control" name="kelurahan" id="kelurahan">
                    <option value="" selected disabled>- Pilih Kelurahan -</option>
                    <?php foreach ($kelurahan as $k) : ?>
                      <option value="<?= $k->id_kelurahan ?>" <?php if ($k->id_kelurahan == $tampil->id_kelurahan) echo 'selected'; ?>><?= $k->nama ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?= form_error('kecamatan', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $tampil->alamat ?>">
                  <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">No. Telepon</label>
                  <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Masukkan No Telepon" value="<?= $tampil->no_telepon ?>">
                  <?= form_error('notelp', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="enum">
                <h6 class="m-0 font-weight-bold text-dark">Pilih Akreditasi</h6>
              </label>
              <select class="form-control" name="akreditasi" id="akreditasi">
                <option value="" selected disabled>Akreditasi</option>
                <option value="A" <?php if ($tampil->akreditasi == "A") echo 'selected'; ?>>A</option>
                <option value="B" <?php if ($tampil->akreditasi == "B") echo 'selected'; ?>>B</option>
                <option value="C" <?php if ($tampil->akreditasi == "C") echo 'selected'; ?>>C</option>
                <option value="Belum Memiliki Akreditasi" <?php if ($tampil->akreditasi == "Belum Memiliki Akreditasi") echo 'selected'; ?>>Belum Memiliki Akreditasi</option>
              </select>
            </div>


            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">NPSN</label>
                  <input type="number" class="form-control" id="npsn" name="npsn" placeholder="Masukkan NPSN" value="<?= $tampil->NPSN ?>">
                  <?= form_error('npsn', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="enum">
                <h6 class="m-0 font-weight-bold text-dark">Pilih Status</h6>
              </label>
              <select class="form-control" name="status" id="status">
                <option value="" selected disabled>Status</option>
                <option value="Negeri" <?php if ($tampil->status == "Negeri") echo 'selected'; ?>>Negeri</option>
                <option value="Swasta" <?php if ($tampil->status == "Swasta") echo 'selected'; ?>>Swasta</option>
              </select>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">Latitude</label>
                  <input type="number" class="form-control" id="lat" name="lat" placeholder="Masukkan Latitude" value="<?= $tampil->lat ?>">
                  <?= form_error('lat', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">Longitude</label>
                  <input type="number" class="form-control" id="long" name="long" placeholder="Masukkan Longitude" value="<?= $tampil->long ?>">
                  <?= form_error('long', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label class=" font-weight-bold text-dark">Website</label>
                  <input type="text" class="form-control" id="website" name="website" placeholder="Masukkan Website" value="<?= $tampil->website ?>">
                  <?= form_error('website', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class=" font-weight-bold text-dark">Pilih Gambar</label> <br>
              <input type="file" accept="image/png, .jpeg, .jpg" id="gambar" name="gambar" onchange="foto(this.value)">
              <img src="holder.jpg" id="ayam" name="ayam" width="150px">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary ">Simpan</button>
              <a href="<?= base_url('Pendidikan/slb') ?>" class="btn btn-success"> Kembali</a>
            </div>
          </form>
          <br>
          <br>
          <?= $this->session->flashdata('message'); ?>
          <h1 class="h3 mb-0 font-weight-bold text-dark">Fasilitas Sekolah</h1>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class="text-center"><b>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  </b>
                </tr>
              </thead>

              <tbody>
                <?php $no = 1;
                foreach ($fasilitas as $f) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $f->nama ?></td>
                    <td> <a data-toggle="modal" type="submit" data-target="#edit-fasilitas<?= $f->id_fasilitas ?>" class="btn btn-primary">Edit</a>
                      <a href="<?= base_url('Pendidikan/delete_fasilitas_slb/' . $f->id_fasilitas . '/' . $f->id_sekolah); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <br>
          <a data-toggle="modal" type="submit" data-target="#tambah-fasilitas" class="btn btn-primary">Tambah</a>
          <br>
          <br>
          <br>
          <?= $this->session->flashdata('ekskul'); ?>
          <h1 class="h3 mb-0 font-weight-bold text-dark">Ekstrakulikuler Sekolah</h1>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
              <thead>
                <tr class="text-center"><b>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  </b>
                </tr>
              </thead>

              <tbody>
                <?php $no = 1;
                foreach ($ekskul as $e) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $e->nama ?></td>
                    <td> <a data-toggle="modal" type="submit" data-target="#edit-ekskul<?= $e->id_ekskul ?>" class="btn btn-primary">Edit</a>
                      <a href="<?= base_url('Pendidikan/delete_ekskul_slb/' . $e->id_ekskul . '/' . $e->id_sekolah); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <br>
          <a data-toggle="modal" type="submit" data-target="#tambah-ekskul" class="btn btn-primary">Tambah</a>
        </div>
      </div>
    </div>

  </div>
  <!--end card body-->
  </div>
  </div>
  <!--end div halaman add-->

  </div>
  </div>
  </div>

  </div>

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-fasilitas" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
          <h4 class="modal-title">Tambah Fasilitas</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_fasilitass_slb/' . $tampil->id_sekolah) ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label class="col-lg-5 col-sm-5 control-label">Nama Fasilitas</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nama" placeholder="Tuliskan Nama Fasilitas">
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
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-ekskul" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
          <h4 class="modal-title">Tambah Ekstrakulikuler</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_ekskull_slb/' . $tampil->id_sekolah) ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label class="col-lg-5 col-sm-5 control-label">Nama Ekstrakulikuler</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nama" placeholder="Tuliskan Nama Ekstrakulikuler">
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
  <?php foreach ($fasilitas as $f) : ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-fasilitas<?= $f->id_fasilitas ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
            <h4 class="modal-title">Edit Fasilitas</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('Pendidikan/edit_fasilitas_slb/' . $f->id_fasilitas); ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label class="col-lg-5 col-sm-5 control-label">Nama Fasilitas</label>
                <div class="col-lg-10">
                  <input type="text" name="id" id="id" hidden value="<?= $tampil->id_sekolah ?>">
                  <input type="text" class="form-control" name="nama" placeholder="Tuliskan Nama Fasilitas" value="<?= $f->nama ?>">
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
  <?php foreach ($ekskul as $e) : ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-ekskul<?= $e->id_ekskul ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
            <h4 class="modal-title">Edit Ekstrakulikuler</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('Pendidikan/edit_ekskul_slb/' . $e->id_ekskul) ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <input type="text" hidden name="id" id="id" value="<?= $tampil->id_sekolah ?>">
              <div class="form-group">
                <label class="col-lg-5 col-sm-5 control-label">Nama Ekstrakulikuler</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="nama" placeholder="Tuliskan Nama Ekstrakulikuler" value="<?= $e->nama ?>">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function foto(val) {
      $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
    }
  </script>