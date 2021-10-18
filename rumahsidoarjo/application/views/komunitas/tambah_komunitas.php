  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-plus-square"></i><b style="padding-left:5px">Tambah Komunitas Baru</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Komunitas/save') ?> " method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Komunitas</label>
                                      <input name="nama_komunitas" id="nama_komunitas" type="text" class="form-control"
                                          placeholder="Masukkan Nama komunitas" required
                                          oninvalid="this.setCustomValidity('Nama komunitas tidak boleh kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Ketua / Penanggung Jawab</label>
                                      <input name="ketua" id="ketua" type="text" class="form-control"
                                          placeholder="ketua Komunitas">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Alamat</label>
                                      <input name="alamat" id="alamat" type="text" class="form-control"
                                          placeholder="Alamat Komunitas" required
                                          oninvalid="this.setCustomValidity('Alamat tidak boleh kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="number" class="form-control"
                                          placeholder="No Telepon Komunitas" required
                                          oninvalid="this.setCustomValidity('No Telepon tidak boleh kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5"
                                          class="form-control"></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Sosial Media</label>
                                      <input name="sosialmedia" id="sosialmedia" type="text" class="form-control"
                                          placeholder="Sosial Media Komunitas">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Foto 1</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          onchange="gambar(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Foto 2</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          onchange="gambar1(this.value)">
                                      <img src="holder.jpg" id="ayam1" name="ayam1" width="150px">
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Foto 3</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto_profil"
                                          name="foto_profil" onchange="gambar2(this.value)">
                                      <img src="holder.jpg" id="ayam2" name="ayam2" width="150px">
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
      function gambar(val) {
          $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
      <script type="text/javascript">
      function gambar1(val) {
          $("#ayam1").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
      <script type="text/javascript">
      function gambar2(val) {
          $("#ayam2").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
  </div>