  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data Lomba Dan Budaya</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <form action="<?php echo base_url('LombadanBudaya/simpanlomba') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" id="nama_lomba" name="nama_lomba"
                                      placeholder="Masukkan Nama Lomba" value="<?= set_value('') ?>">
                                  <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label>Tanggal Publish</label>
                          <input name="tgl_publish" id="tgl_publish" type="date" class="form-control">
                      </div>


                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Deskripsi</label>
                                  <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                      placeholder="Masukkan Deskripsi" value="<?= set_value('') ?>">
                                  <?= form_error('deskripsi', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>


                      <div class="form-group">
                          <label>Masukkan Foto</label> <br>
                          <input type="file" id="foto" name="foto" onchange="foto1(this.value)">
                          <img src="holder.jpg" id="ayam" name="ayam" width="150px"> <br>
                          <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>


                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Link</label>
                                  <input type="text" class="form-control" id="link" name="link"
                                      placeholder="Masukkan Link" value="<?= set_value('link') ?>">
                                  <?= form_error('link', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <br>

                      <!--div button-->
                      <div class="row">
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary ">Simpan</button>
                              <a href="<?= base_url('LombaDanBudaya') ?>" class="btn btn-success"> Kembali</a>

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
function foto1(val) {
    $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>