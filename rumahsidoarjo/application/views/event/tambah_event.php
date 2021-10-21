  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-calendar-alt"></i><b style="padding-left:5px">Tambah Event</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Event/save') ?> " method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Pilih Kategori</h6>
                                      </label>
                                      <select class="form-control" name="kategori" id="kategori">
                                          <option value="Agenda Kota">Agenda Kota</option>
                                          <option value="Lomba Budaya">Lomba Budaya</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Nama Event</label>
                                      <input name="nama_event" id="nama_evet" type="text" class="form-control"
                                          placeholder="Masukkan Nama Event" required
                                          oninvalid="this.setCustomValidity('Nama Event Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Tanggal Publish</label>
                                      <input name="tgl_posting" id="tgl_posting" type="date" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label>Penyelenggara</label>
                                      <input name="penyelenggara" id="penyelenggara" type="text" class="form-control"
                                          placeholder="Masukkan Nama Penyelenggara" required
                                          oninvalid="this.setCustomValidity('Nama Penyelenggara Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Tempat</label>
                                      <input name="tempat_kegiatan" id="tempat_kegiatan" type="text"
                                          class="form-control" placeholder="Masukkan Lokasi Kegiatan" required
                                          oninvalid="this.setCustomValidity('Tempat Kegiatan Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"
                                          required oninvalid="this.setCustomValidity('Deskripsi tidak boleh kosong!')"
                                          oninput="setCustomValidity('')"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          onchange="fotos(this.value)">
                                      <img src="holder.jpg" id="ayams" name="ayam1" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto3" name="foto3"
                                          onchange="fotos1(this.value)">
                                      <img src="holder.jpg" id="ayams1" name="ayam2" width="150px">
                                  </div>


                                  <!-- <div class="form-group">
                                      <label>Link</label>
                                      <input name="link" id="link" type="text" class="form-control"
                                          placeholder="Masukkan link">
                                  </div> -->
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a class="btn btn-warning" href="<?= base_url('Event'); ?>"
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

      function fotos(val) {
          $("#ayams").attr('src', URL.createObjectURL(event.target.files[0]));
      }

      function fotos1(val) {
          $("#ayams1").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
  </div>