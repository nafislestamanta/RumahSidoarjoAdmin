  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Data Lomba Dan Budaya</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <dic class="card-body">
                  <form action="<?php echo base_url('LombaDanBudaya/update_lomba/' . $edit->id_lomba) ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" id="nama_lomba" name="nama_lomba"
                                      value="<?= $edit->nama_lomba ?>">
                                  <?= form_error('nama_lomba', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Tanggal Publish</label>
                                  <input type="date" class="form-control" id="tgl_publish" name="tgl_publish"
                                      value="<?= $edit->tgl_publish ?>">
                                  <?= form_error('tgl_publish', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Deskripsi</label>
                                  <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                      value="<?= $edit->deskripsi ?>">
                                  <?= form_error('deskripsi', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label>Pilih Gambar</label> <br>
                          <input type="file" accept="image/png, .jpeg, .jpg" id="foto" name="foto"
                              value="<?= $edit->foto ?>" onchange="foto(this.value)">
                          <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Link</label>
                                  <input type="text" class="form-control" id="link" name="link"
                                      placeholder="Masukkan Link" value="<?= $edit->link ?>">
                                  <?= form_error('link', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>


                      <br>

                      <!--div button-->
                      <div class=" row">
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary ">Simpan</button>

                          </div>
                      </div>
                  </form>
          </div>
          <!--end card body-->
      </div>
  </div>
  <!--end div halaman add-->

  </div>
  </div>
  </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function gambar(val) {
    $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>