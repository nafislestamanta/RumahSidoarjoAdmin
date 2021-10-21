  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-store"></i><b style="padding-left:5px">Tambah UMKM</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Umkm/save') ?> " method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Pilih Kategori</h6>
                                      </label>
                                      <select class="form-control" name="kategori" id="kategori">
                                          <option value="Kerajinan">Kerajinan</option>
                                          <option value="Makanan">Makanan</option>
                                          <option value="Pertanian">Pertanian</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Nama UMKM</label>
                                      <input name="nama" id="nama" type="text" class="form-control"
                                          placeholder="Masukkan Nama Umkm" required
                                          oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Alamat</label>
                                      <input name="alamat" id="alamat" type="text" class="form-control"
                                          placeholder="Masukkan Alamat Umkm" required
                                          oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Penanggung Jawab</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text"
                                          class="form-control" placeholder="Masukkan Penanggung Jawab Umkm" required
                                          oninvalid="this.setCustomValidity('Penanggung Jawab Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Gambar 1</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Gambar 2</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam1" name="ayam1" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Gambar 3</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto3" name="foto3"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam2" name="ayam2" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"
                                          required oninvalid="this.setCustomValidity('Deskripsi tidak boleh kosong!')"
                                          oninput="setCustomValidity('')"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">No Telepon</label>
                                      <input name="no_telp" id="no_telp" type="number" class="form-control"
                                          placeholder="Masukkan Penanggung Jawab Umkm" required
                                          oninvalid="this.setCustomValidity('Nomer Telepon Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Webiste</label>
                                      <input name="website" id="website" type="text" class="form-control"
                                          placeholder="Masukkan link Website / Media Sosial anda">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">lat</label>
                                      <input name="lat" id="lat" type="text" class="form-control"
                                          placeholder="Masukkan lat">
                                  </div>

                                  <div class="form-group">
                                      <label class="font-weight-bold text-dark">Long</label>
                                      <input name="long" id="long" type="text" class="form-control"
                                          placeholder="Masukkan long">
                                  </div>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      function foto(val) {
          $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
  </div>