  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Data PKM Utama</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <form action="<?php echo base_url('Kesehatan/savepkmu/' . $pkmu->id_kesehatan) ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Nama RSU</label>
                                  <input type="text" class="form-control" id="nama" name="nama"
                                      placeholder="Masukan Nama RSU" value="<?= $pkmu->nama ?>">
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
                                      placeholder="Masukkan Alamat" value="<?= $pkmu->alamat ?>">
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
                                          <?php if ($k->id_kecamatan == $pkmu->id_kecamatan) echo 'selected'; ?>>
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
                                          <?php if ($pkmu->kepemilikan == "Pemerintah") echo 'selected'; ?>>Pemerintah
                                      </option>
                                      <option value="Swasta"
                                          <?php if ($pkmu->kepemilikan == "Swasta") echo 'selected'; ?>>Swasta</option>
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
                                      placeholder="Masukkan Penanggung Jawab" value="<?= $pkmu->penanggung_jawab ?>">
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
                                      placeholder="Masukkan no.telepon" value="<?= $pkmu->no_telepon ?>">
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
                                      placeholder="Masukkan no.telepon" value="<?= $pkmu->fax ?>">
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
                                      placeholder="Masukkan Email" value="<?= $pkmu->email ?>">
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
                                      placeholder="Masukkan Website" value="<?= $pkmu->website ?>">
                              </div>
                          </div>
                      </div>


                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Longitude</label>
                                  <input type="number" class="form-control" id="long" name="long"
                                      placeholder="Masukkan Longitude" value="<?= $pkmu->long ?>">
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
                                      placeholder="Masukkan Langitude" value="<?= $pkmu->lat ?>">
                                  <?= form_error('lat', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <!-- <div class="form-group">
                          <input type="file" id="gambar" name="gambar" onchange="foto(this.value)">
                          <img src="holder.jpg" id="ayam" name="ayam" width="150px"> <br>
                      </div> -->

                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <td>Gambar</td>
                                  <td>
                                      <?= $this->session->flashdata('alert'); ?>
                                      <div class="form-group">
                                          <br>
                                          <img src="<?= base_url('assets/img/' . $pkmu->foto); ?>" id="foto"
                                              width="150px">
                                          <a data-toggle="modal" type="submit"
                                              data-target="#editmodalgambar<?= $pkmu->id_kesehatan ?>"
                                              class="btn btn-primary">Edit</a>
                                          <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                      </div>
                                  </td>
                              </tr>
                          </thead>
                      </table>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Link</label>
                                  <input type="text" class="form-control" id="link" name="link"
                                      placeholder="Masukkan Link" value="<?= $pkmu->link ?>">
                                  <?= form_error('link', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>
                      <br>

                      <!--div button-->
                      <div class="row">
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary ">Simpan</button>
                              <a href="<?= base_url('Kesehatan/pkmutama') ?>" class="btn btn-success"> Kembali</a>

                          </div>
                      </div>
                  </form>
              </div>
              <!--end card body-->
          </div>
      </div>
      <!--end div halaman add-->

  </div>

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
      id="editmodalgambar<?= $pkmu->id_kesehatan ?>" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Edit Gambar</h4>
              </div>
              <form class="form-horizontal"
                  action="<?php echo base_url('Kesehatan/simpanGambar1/' . $pkmu->id_kesehatan) ?>" method="post"
                  enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <div class="form-group">
                          <div class="col-lg-10">
                              <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                              <img src="<?= base_url('assets/img/' . $pkmu->foto); ?>" id="foto" width="150px">
                          </div>
                          <br>
                          <input type="file" id="foto" name="foto" accept="image/png, .jpeg, .jpg"
                              onchange="gambar1(this.value)">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function gambar1(val) {
    $("#foto1").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>