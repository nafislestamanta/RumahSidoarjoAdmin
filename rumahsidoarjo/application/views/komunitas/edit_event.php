  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Event</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Komunitas/update_event/' . $edit->id_event); ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Event</label>
                                      <input name="nama_event" id="nama_event" type="text" class="form-control"
                                          placeholder="Nama Event" value="<?= $edit->nama_event ?>">
                                  </div>

                                  <div class="row">
                                      <div class="col-sm-12">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label for="enum">
                                                  <h6 class="m-0 font-weight-bold text-dark">Komunitas Pelaksana</h6>
                                              </label>
                                              <select class="form-control" name="nama_komunitas" id="nama_komunitas">
                                                  <!-- <opztion>Pilih Perusahaan</opztion> -->
                                                  <?php foreach ($komunitas as $k) : ?>
                                                  <option value="<?= $k->id_komunitas ?>"
                                                      <?php if ($k->id_komunitas == $edit->id_komunitas)                                                                                   echo 'selected'; ?>>
                                                      <?= $k->nama_komunitas ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                              <?= form_error('nama_komunitas', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </div>
                                      </div>
                                  </div>

                                  <!-- <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Waktu Pelaksanaan</label>
                                      <input name="waktu" id="waktu" type="date" class="form-control"
                                          placeholder="Nama Event" value="<?= $edit->waktu ?>">
                                  </div> -->
                                  <br>
                                  <div class="form-group">
                                      <tr>
                                          <label class="m-0 font-weight-bold text-dark">Tanggal Pelaksanaan</label>
                                          <td>
                                              <input name="tanggal" id="tanggal" type="date" class=""
                                                  placeholder="Nama Event" value="<?= $edit->tanggal ?>">
                                          </td>
                                      </tr>
                                      <tr>
                                          <label class="m-0 font-weight-bold text-dark"
                                              style="padding-left: 50px;">Waktu
                                              Pelaksanaan
                                              Pelaksanaan</label>
                                          <td>
                                              <input name="waktu" id="waktu" type="time" class=""
                                                  placeholder="Nama Event" value="<?= $edit->waktu ?>">
                                          </td>
                                      </tr>
                                  </div>
                                  <br>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Tempat Pelaksanaan</label>
                                      <input name="tempat" id="tempat" type="text" class="form-control"
                                          placeholder="Nama Event" value="<?= $edit->tempat ?>">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="number" class="form-control"
                                          placeholder="Nama Event" value="<?= $edit->no_tlp ?>">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Penanggung Jawab Event</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text"
                                          class="form-control" placeholder="Nama Event"
                                          value="<?= $edit->penanggung_jawab ?>">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi Event</label>
                                      <textarea name="deskripsi" id="deskripsi" value="<?= $edit->deskripsi ?>"
                                          class="form-control"><?= $edit->deskripsi ?></textarea>
                                  </div>
                                  <br>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Poster Iklan</label>
                                      <tr>
                                          <input name="foto1" id="foto1" type="file" class=""
                                              onchange="foto(this.value)" value="<?= $edit->foto1 ?>">
                                          <td>
                                              <img src="holder.jpg" id="ayam" name="ayam" width="150px"
                                                  class="text-center">
                                              <?= form_error('foto1', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </td>
                                      </tr>
                                  </div>
                                  <br>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Dokumen Pendukung</label>
                                      <input name="foto2" id="foto2" type="file" class="form-control"
                                          value="<?= $edit->foto2 ?>">
                                  </div>

                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-info">Update</button>
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