  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Perusahaan</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LowonganKerja/update_perusahaan/' . $edit->id); ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama Perusahaan</label>
                                      <input name="nama_perusahaan" id="nama_perusahaan" type="text"
                                          class="form-control" placeholder="Nana Perusahaan"
                                          value="<?= $edit->nama_perusahaan ?>">
                                  </div>

                                  <!-- <div class="form-group">
                                      <label>Kepemilikan</label>
                                      <input name="kepemilikan" id="kepemilikan" value="<?= $edit->kepemilikan ?>"
                                          class="form-control">
                                  </div> -->

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6>Kepemilikan</h6>
                                      </label>
                                      <select class="form-control" name="kepemilikan" id="kepemilikan">
                                          <option value="Pemerintah"
                                              <?php if ($edit->kepemilikan == 'Pemerintah') echo 'selected'; ?>>
                                              Pemerintah
                                          </option>
                                          <option value="Swasta"
                                              <?php if ($edit->kepemilikan == 'Swasta') echo 'selected'; ?>>Swasta
                                          </option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea name="alamat" id="alamat" value="<?= $edit->alamat ?>"
                                          class="form-control"><?= $edit->alamat ?></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="number" class="form-control"
                                          value="<?= $edit->no_tlp ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Email</label>
                                      <input name="email" id="email" type="email" class="form-control"
                                          value="<?= $edit->email ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Penanggung Jawab</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text"
                                          class="form-control" value="<?= $edit->penanggung_jawab ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <input name="deskripsi" id="deskripsi" type="text" class="form-control"
                                          value="<?= $edit->deskripsi ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto" name="foto"
                                          value="<?= $edit->foto ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
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