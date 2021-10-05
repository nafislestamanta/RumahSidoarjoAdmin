  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data UMKM</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <dic class="card-body">

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Nama</label>
                              <input type="text" class="form-control" id="" name="" placeholder="Masukkan nama umkm"
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Alamat</label>
                              <input type="text" class="form-control" id="" name="" placeholder="Masukkan alamat"
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>No. Telepon</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Penanggung Jawab</label>
                              <input type="text" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Deskripsi</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Langitudinal</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Longitudinal</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Foto Utama</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Foto Kedua</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Foto Ketiga</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                              <label>Website</label>
                              <input type="" class="form-control" id="" name="" placeholder=""
                                  value="<?= set_value('') ?>">
                              <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                          </div>
                      </div>
                  </div>


                  <br>

                  <!--div button-->
                  <div class="row">
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary ">Simpan</button>
                          <a href="<?= base_url('Umkm') ?>" class="btn btn-success"> Kembali</a>

                      </div>
                  </div>
                  <?= form_close() ?>
          </div>
          <!--end card body-->
      </div>
  </div>
  <!--end div halaman add-->

  </div>
  </div>
  </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function gambar(val) {
    $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>