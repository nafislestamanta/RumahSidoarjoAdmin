  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-info-circle"></i><b style="padding-left:5px">Tambah Berita Dan Informasi</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('BeritaInformasi/save') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Pilih Kategori</h6>
                                      </label>
                                      <select class="form-control" name="kategori" id="kategori">
                                          <option value="Informasi">Informasi</option>
                                          <option value="Berita">Berita</option>
                                          <option value="Pengumuman">Pengumuman</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Judul Postingan</label>
                                      <input name="judul" id="judul" type="text" class="form-control"
                                          placeholder="Masukkan Judul Postingan" required
                                          oninvalid="this.setCustomValidity('Judul Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Tanggal Publish</label>
                                      <input name="tanggal_publish" id="tanggal_publish" type="date"
                                          class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"
                                          required oninvalid="this.setCustomValidity('Deskripsi tidak boleh kosong!')"
                                          oninput="setCustomValidity('')"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="gambar" name="gambar"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>


                                  <div class="form-group">
                                      <label>Link</label>
                                      <input name="link" id="link" type="text" class="form-control"
                                          placeholder="Masukkan link">
                                  </div>
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>

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