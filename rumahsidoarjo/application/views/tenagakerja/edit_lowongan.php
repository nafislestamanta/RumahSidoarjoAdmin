  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Lowongan</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LowonganKerja/update_lowongan/' . $edit->id); ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Judul Lowongan</label>
                                      <input name="judul_lowongan" id="judul_lowongan" type="text" class="form-control"
                                          placeholder="Judul Lowongan" value="<?= $edit->judul_lowongan ?>">
                                  </div>

                                  <!-- <div class="form-group">
                                      <label>Kepemilikan</label>
                                      <input name="kepemilikan" id="kepemilikan" value="<?= $edit->kepemilikan ?>"
                                          class="form-control">
                                  </div> -->

                                  <!-- <div class="form-group">
                                      <label for="enum">
                                          <h6>Perusahaan</h6>
                                      </label>
                                      <select class="form-control" name="kepemilikan" id="kepemilikan">
                                          <option value="Pemerintah" <?php if ($edit->kepemilikan == 'Pemerintah') echo 'selected'; ?>>
                                              Pemerintah
                                          </option>
                                          <option value="Swasta" <?php if ($edit->kepemilikan == 'Swasta') echo 'selected'; ?>>Swasta
                                          </option>
                                      </select>
                                  </div> -->


                                  <div class="row">
                                      <div class="col-sm-12">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label for="enum">
                                                  <h6 class="m-0 font-weight-bold text-dark">Perusahaan</h6>
                                              </label>
                                              <select class="form-control" name="nama_perusahaan" id="nama_perusahaan">
                                                  <!-- <opztion>Pilih Perusahaan</opztion> -->
                                                  <?php foreach ($perusahaan as $k) : ?>
                                                  <option value="<?= $k->id ?>"
                                                      <?php if ($k->id == $edit->id)                                                                                   echo 'selected'; ?>>
                                                      <?= $k->nama_perusahaan ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                              <?= form_error('nama_perusahaan', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi Pekerjaan</label>
                                      <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan"
                                          value="<?= $edit->deskripsi_pekerjaan ?>"
                                          class="form-control"><?= $edit->deskripsi_pekerjaan ?></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Poster Iklan</label>
                                      <input name="foto_lowongan" id="foto_lowongan" type="text" class="form-control"
                                          value="<?= $edit->foto_lowongan ?>">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Dokumen Pendukung</label>
                                      <input name="file" id="file" type="file" class="form-control"
                                          value="<?= $edit->file ?>">
                                  </div>

                                  <div class="card-footer">
                                      <button type="submit" class="btn-sm btn-info">Update</button>

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