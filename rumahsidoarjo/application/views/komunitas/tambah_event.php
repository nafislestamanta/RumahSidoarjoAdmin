  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-calendar-plus"></i><b style="padding-left:5px">Tambah Event</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Komunitas/save_event') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Event</label>
                                      <input name="nama_event" id="nama_event" type="text" class="form-control"
                                          placeholder="Masukkan Judul Postingan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('nama_event', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="row">
                                      <div class="col-sm-12">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label for="enum">
                                                  <h6 class="m-0 font-weight-bold text-dark">Komunitas Pelaksana</h6>
                                              </label>
                                              <select class="form-control" name="nama_komunitas" id="nama_komunitas">
                                                  <option value="" selected disabled>Daftar Komunitas</option>
                                                  <?php foreach ($komunitas as $k) : ?>
                                                  <option value="<?= $k->id_komunitas ?>"><?= $k->nama_komunitas ?>
                                                  </option>
                                                  <?php endforeach; ?>
                                              </select>
                                              <?= form_error('nama_komunitas', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Tanggal Pelaksanaan</label>
                                      <input name="tanggal" id="tanggal" type="date" class="form-control"
                                          placeholder="tanggal Pelaksanaan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('tanggal', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Waktu Pelaksanaan</label>
                                      <input name="waktu" id="waktu" type="time" class="form-control"
                                          placeholder="Waktu Pelaksanaan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('waktu', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Tempat Pelaksanaan</label>
                                      <input name="tempat" id="tempat" type="text" class="form-control"
                                          placeholder="Masukkan Tempat Pelaksanaan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('tempat', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="number" class="form-control"
                                          placeholder="Masukkan Judul Postingan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('no_tlp', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Penanggung jawab Event</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text"
                                          class="form-control" placeholder="Masukkan Judul Postingan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('penanggung_jawab', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi Event</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"
                                          required oninvalid="this.setCustomValidity('Deskripsi tidak boleh kosong!')"
                                          oninput="setCustomValidity('')"></textarea>
                                      <?= form_error('deskripsi', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label>Gambar / Pamflet Event </label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                      <?= form_error('foto1', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label> Dokumen Pendukung </label> <br>
                                      <input type="file" id="foto2" name="foto2" onchange="foto(this.value)">
                                  </div>

                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a class="btn btn-warning" href="<?= base_url('Komunitas/event'); ?>"
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