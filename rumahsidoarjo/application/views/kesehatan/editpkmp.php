  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Data PKM Pembantu</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <form action="<?php echo base_url('Kesehatan/savepkmp/' . $pkmp->id_kesehatan) ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Nama Puskesmas</label>
                                  <input type="text" class="form-control" id="nama" name="nama"
                                      placeholder="Masukan Nama Puskesmas" value="<?= $pkmp->nama ?>">
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
                                      placeholder="Masukkan Alamat" value="<?= $pkmp->alamat ?>">
                                  <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>');  ?>
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
                                      <?php foreach ($kecamatan as $k) : ?>
                                      <option value="<?= $k->id_kecamatan ?>"
                                          <?php if ($k->id_kecamatan == $pkmp->id_kecamatan) echo 'selected'; ?>>
                                          <?= $k->kecamatan ?></option>
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
                                      <h6 class="m-0 font-weight-bold text-dark">Pengelola</h6>
                                  </label>
                                  <select class="form-control" name="pengelola" id="pengelola">
                                      <option value="Pemerintah"
                                          <?php if ($pkmp->kepemilikan == "Pemerintah") echo 'selected'; ?>>Pemerintah
                                      </option>
                                      <option value="Swasta"
                                          <?php if ($pkmp->kepemilikan == "Swasta") echo 'selected'; ?>>Swasta</option>
                                  </select>
                                  <?= form_error('kecamatan', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Penanggung Jawab</label>
                                  <input type="text" class="form-control" id="pj" name="pj"
                                      placeholder="Masukkan Penanggung Jawab" value="<?= $pkmp->penanggung_jawab ?>">
                                  <?= form_error('pj', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>No. Telepon</label>
                                  <input type="number" class="form-control" maxlength="13" id="notelp" name="notelp"
                                      placeholder="Masukkan no.telepon" value="<?= $pkmp->no_telepon ?>">
                                  <?= form_error('notelp', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Fax</label>
                                  <input type="number" class="form-control" id="fax" name="fax"
                                      placeholder="Masukkan no.telepon" value="<?= $pkmp->fax ?>">
                                  <?= form_error('fax', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" class="form-control" id="email" name="email"
                                      placeholder="Masukkan Email" value="<?= $pkmp->email ?>">
                                  <?= form_error('email', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Website</label>
                                  <input type="text" class="form-control" id="website" name="website"
                                      placeholder="Masukkan Website" value="<?= $pkmp->website ?>">
                              </div>
                          </div>
                      </div>


                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Longitude</label>
                                  <input type="number" class="form-control" id="long" name="long"
                                      placeholder="Masukkan Longitude" value="<?= $pkmp->long ?>">
                                  <?= form_error('long', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Langitude</label>
                                  <input type="number" class="form-control" id="lat" name="lat"
                                      placeholder="Masukkan Langitude" value="<?= $pkmp->lat ?>">
                                  <?= form_error('lat', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <input type="file" id="gambar" name="gambar" onchange="foto(this.value)">
                          <img src="holder.jpg" id="ayam" name="ayam" width="150px"> <br>
                      </div>


                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Link</label>
                                  <input type="text" class="form-control" id="link" name="link"
                                      placeholder="Masukkan Link" value="<?= $pkmp->link ?>">
                                  <?= form_error('link', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>
                      <br>

                      <!--div button-->
                      <div class="row">
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary ">Simpan</button>
                              <a href="<?= base_url('Kesehatan') ?>" class="btn btn-success"> Kembali</a>

                          </div>
                      </div>
                  </form>
              </div>
              <!--end card body-->
          </div>
      </div>
      <!--end div halaman add-->

  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function foto(val) {
    $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>