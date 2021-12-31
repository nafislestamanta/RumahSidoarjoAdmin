  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-plus-square"></i><b style="padding-left:5px">Tambah Perusahaan</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LowonganKerja/save') ?> " method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Perusahaan</label>
                                      <input name="nama_perusahaan" id="nama_perusahaan" type="text" class="form-control" placeholder="Masukkan Nama Perusahaan" required oninvalid="this.setCustomValidity('Nama Perusahaan tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Kepemilikan</h6>
                                      </label>
                                      <select class="form-control" name="kepemilikan" id="kepemilikan">
                                          <option value="Pemerintah">Pemerintah</option>
                                          <option value="Swasta">Swasta</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Alamat</label>
                                      <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat Perusahaan" required oninvalid="this.setCustomValidity('Alamat tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="number" class="form-control" placeholder="No Telepon Perusahaan" required oninvalid="this.setCustomValidity('No Telepon tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Email</label>
                                      <input name="email" id="email" type="email" class="form-control" placeholder="Email Perusahaan">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Penanggung Jawab</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text" class="form-control" placeholder="Penanggung Jawab Perusahaan" required oninvalid="this.setCustomValidity('Penanggung Jawab tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Website</label>
                                      <input name="website" id="website" type="text" class="form-control" placeholder="Webiste" required oninvalid="this.setCustomValidity('Penanggung Jawab tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Lat</label>
                                      <input name="lat" id="lat" type="text" class="form-control" placeholder="Lat" required oninvalid="this.setCustomValidity('Penanggung Jawab tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Long</label>
                                      <input name="long" id="long" type="text" class="form-control" placeholder="Long" required oninvalid="this.setCustomValidity('Penanggung Jawab tidak boleh kosong!')" oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Foto</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto" name="foto" onchange="gambar(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a class="btn btn-warning" href="<?= base_url('LowonganKerja'); ?>" role="button">kembali</a>
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
  </div>