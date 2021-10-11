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
                                      <label>Pilih Gambar 1</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          value="<?= $edit->foto1 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar 2</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          value="<?= $edit->foto2 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar 3</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto3" name="foto3"
                                          value="<?= $edit->foto3 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
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


                                  <div class="card-footer">
                                      <button type="submit" class="btn-sm btn-primary">Simpan</button>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      function foto(val) {
          $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>