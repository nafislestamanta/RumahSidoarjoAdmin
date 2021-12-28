  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data SMP</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <form action="<?php echo base_url('Pendidikan/simpanSMP') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label class=" font-weight-bold text-dark">Nama SMP</label>
                                  <input type="text" class="form-control" id="nama" name="nama"
                                      placeholder="Masukkan Nama SMP" value="<?= set_value('nama') ?>">
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
                                      <option value="<?= $k->id_kecamatan ?>"><?= $k->kecamatan ?></option>
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
                                  <label for="enum">
                                      <h6 class="m-0 font-weight-bold text-dark">Kelurahan</h6>
                                  </label>
                                  <select class="form-control" name="kelurahan" id="kelurahan">
                                      <option value="" selected disabled>- Pilih Kelurahan -</option>
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
                                  <label class=" font-weight-bold text-dark">No. Telepon</label>
                                  <input type="number" class="form-control" id="notelp" name="notelp"
                                      placeholder="Masukkan No Telepon" value="<?= set_value('notelp') ?>">
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
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="Belum Memiliki Akreditasi">Belum Memiliki Akreditasi</option>
                          </select>
                      </div>


                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label class=" font-weight-bold text-dark">NPSN</label>
                                  <input type="number" class="form-control" id="npsn" name="npsn"
                                      placeholder="Masukkan NPSN" value="<?= set_value('npsn') ?>">
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
                              <option value="Negeri">Negeri</option>
                              <option value="Swasta">Swasta</option>
                          </select>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label class=" font-weight-bold text-dark">Latitude</label>
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
                                  <label class=" font-weight-bold text-dark">Longitude</label>
                                  <input type="number" class="form-control" id="long" name="long"
                                      placeholder="Masukkan Longitude" value="<?= set_value('long') ?>">
                                  <?= form_error('long', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label class=" font-weight-bold text-dark">Website</label>
                                  <input type="text" class="form-control" id="website" name="website"
                                      placeholder="Masukkan Website" value="<?= set_value('website') ?>">
                                  <?= form_error('website', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class=" font-weight-bold text-dark">Pilih Gambar</label> <br>
                          <input type="file" accept="image/png, .jpeg, .jpg" id="gambar" name="gambar"
                              onchange="foto(this.value)">
                          <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                      </div>

                      <br>

                      <!--div button-->
                      <div class="row">
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary ">Simpan</button>
                              <a href="<?= base_url('Pendidikan/Smp') ?>" class="btn btn-success"> Kembali</a>

                          </div>
                      </div>
                  </form>
              </div>
              <!--end card body-->
          </div>
      </div>
      <!--end div halaman add-->

  </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function foto(val) {
    $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>