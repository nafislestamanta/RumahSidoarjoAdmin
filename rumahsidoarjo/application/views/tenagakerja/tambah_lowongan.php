  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-file-signature"></i><b style="padding-left:5px">Tambah Lowongan Kerja</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LowonganKerja/save_lowongan') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <!-- <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Pilih Kategori</h6>
                                      </label>
                                      <select class="form-control" name="kategori" id="kategori">
                                          <option value="Informasi">Informasi</option>
                                          <option value="Berita">Berita</option>
                                          <option value="Pengumuman">Pengumuman</option>
                                      </select>
                                  </div> -->

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Judul Lowongan</label>
                                      <input name="judul_lowongan" id="judul_lowongan" type="text" class="form-control"
                                          placeholder="Masukkan Judul Postingan" required
                                          oninvalid="this.setCustomValidity('Judul Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('judul_lowongan', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>


                                  <div class="row">
                                      <div class="col-sm-12">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label for="enum">
                                                  <h6 class="m-0 font-weight-bold text-dark">Perusahaan</h6>
                                              </label>
                                              <select class="form-control" name="nama_perusahaan" id="nama_perusahaan">
                                                  <option value="" selected disabled>Daftar Perusahaan</option>
                                                  <?php foreach ($perusahaan as $k) : ?>
                                                  <option value="<?= $k->id ?>"><?= $k->nama_perusahaan ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                              <?= form_error('nama_perusahaan', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi Pekerjaan</label>
                                      <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" cols="30" rows="5"
                                          class="form-control" required
                                          oninvalid="this.setCustomValidity('Deskripsi tidak boleh kosong!')"
                                          oninput="setCustomValidity('')"></textarea>
                                      <?= form_error('deskripsi_pekerjaan', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label>Gambar / Foto Promosi </label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto_lowongan"
                                          name="foto_lowongan" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                      <?= form_error('foto_lowongan', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label> Dokumen Pendukung </label> <br>
                                      <input type="file" id="file" name="file" onchange="foto(this.value)">
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
  </div>