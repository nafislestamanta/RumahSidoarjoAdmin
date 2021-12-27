  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Data UMKM</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Umkm/update/' . $edit->id_umkm); ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Pilih Kategori</h6>
                                      </label>
                                      <select class="form-control" name="kategori" id="kategori">
                                          <option value="Kerajinan"
                                              <?php if ($edit->kategori == 'Kerajinan') echo 'selected'; ?>>Kerajinan
                                          </option>
                                          <option value="Makanan"
                                              <?php if ($edit->kategori == 'Makanan') echo 'selected'; ?>>Makanan
                                          </option>
                                          <option value="Pertanian"
                                              <?php if ($edit->kategori == 'Pertanian') echo 'selected'; ?>>Pertanian
                                          </option>

                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama</label>
                                      <input name="nama" id="nama" type="text" class="form-control"
                                          placeholder="Masukkan Nama " value="<?= $edit->nama ?>"
                                          oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Alamat</label>
                                      <input name="alamat" id="alamat" type="text" value="<?= $edit->alamat ?>"
                                          class="form-control"
                                          oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Penanggung Jawab</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text"
                                          value="<?= $edit->penanggung_jawab ?>" class="form-control"
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5"
                                          value="<?= $edit->deskripsi ?>"
                                          class="form-control"><?= $edit->deskripsi ?></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">No Telepon</label>
                                      <input name="no_telp" id="no_telp" type="text" value="<?= $edit->no_telp ?>"
                                          class="form-control" oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Website</label>
                                      <input name="website" id="website" type="text" class="form-control"
                                          value="<?= $edit->website ?>" placeholder="Link Website / Media Sosial">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Lat</label>
                                      <input name="lat" id="lat" type="text" class="form-control"
                                          value="<?= $edit->lat ?>" placeholder="">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Long</label>
                                      <input name="long" id="long" type="text" class="form-control"
                                          value="<?= $edit->long ?>" placeholder="">
                                  </div>



                                  <table class="table table-bordered" width="90%" cellspacing="0">
                                      <thead>
                                          <tr class="text-center"><b>
                                                  <th>Gambar 1</th>
                                                  <th>Gambar 2</th>
                                                  <th>Gambar 3</th>
                                              </b>
                                          </tr>
                                      </thead>
                                      <tbody class="text-center">
                                          <tr>
                                              <td>
                                                  <?= $this->session->flashdata('alert'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto1); ?>"
                                                          id="foto1" width="150px"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar<?= $edit->id_umkm ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                              <td>
                                                  <?= $this->session->flashdata('alert1'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto2); ?>"
                                                          id="foto2" width="150px"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar2<?= $edit->id_umkm ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                              <td>
                                                  <?= $this->session->flashdata('alert2'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto3); ?>"
                                                          id="foto3" width="150px"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar3<?= $edit->id_umkm ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>

                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a class="btn btn-warning" href="<?= base_url('Umkm'); ?>"
                                          role="button">kembali</a>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>





      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
          id="editmodalgambar<?= $edit->id_umkm ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url('Umkm/simpanGambar/' . $edit->id_umkm) ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto1); ?>" id="foto1" width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto1" name="foto1" accept="image/png, .jpeg, .jpg"
                                  onchange="gambar11(this.value)">
                              <div class="col-lg-10">
                                  <br>
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                  <img src="holder.jpg" id="foto11" width="150px">
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                          <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
          id="editmodalgambar2<?= $edit->id_umkm ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url('Umkm/simpanGambar/' . $edit->id_umkm) ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto2); ?>" id="foto2" width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto2" name="foto2" accept="image/png, .jpeg, .jpg"
                                  onchange="gambar22(this.value)">
                              <div class="col-lg-10">
                                  <br>
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                  <img src="holder.jpg" id="foto22" width="150px">
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                          <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
          id="editmodalgambar3<?= $edit->id_umkm ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url('Umkm/simpanGambar/' . $edit->id_umkm) ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto3); ?>" id="foto3" width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto3" name="foto3" accept="image/png, .jpeg, .jpg"
                                  onchange="gambar33(this.value)">
                              <div class="col-lg-10">
                                  <br>
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                  <img src="holder.jpg" id="foto33" width="150px">
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                          <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      function gambar11(val) {
          $("#foto11").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>

      <script type="text/javascript">
      function gambar22(val) {
          $("#foto22").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>

      <script type="text/javascript">
      function gambar33(val) {
          $("#foto33").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>