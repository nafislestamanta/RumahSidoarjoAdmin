  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Komunitas</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Komunitas/update_komunitas/' . $edit->id_komunitas); ?>"
                      method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama Komunitas</label>
                                      <input name="nama_komunitas" id="nama_komunitas" type="text" class="form-control"
                                          placeholder="Nana komunitas" value="<?= $edit->nama_komunitas ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Ketua / Penanggung Jawab</label>
                                      <input name="ketua" id="ketua" type="text" class="form-control"
                                          value="<?= $edit->ketua ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea name="alamat" id="alamat" value="<?= $edit->alamat ?>"
                                          class="form-control"><?= $edit->alamat ?></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="text" class="form-control"
                                          value="<?= $edit->no_tlp ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <input name="deskripsi" id="deskripsi" type="text" class="form-control"
                                          value="<?= $edit->deskripsi ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Sosial Media</label>
                                      <input name="sosialmedia" id="sosialmedia" type="text" class="form-control"
                                          value="<?= $edit->sosialmedia ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Foto 1</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          value="<?= $edit->foto1 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Foto 2</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          value="<?= $edit->foto2 ?>" onchange="foto1(this.value)">
                                      <img src="holder.jpg" id="ayam1" name="ayam1" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Foto 3</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto_profil"
                                          name="foto_profil" value="<?= $edit->foto_profil ?>"
                                          onchange="foto2(this.value)">
                                      <img src="holder.jpg" id="ayam2" name="ayam2" width="150px">
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
      <script type="text/javascript">
      function foto1(val) {
          $("#ayam1").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
      <script type="text/javascript">
      function foto2(val) {
          $("#ayam2").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
  </div>