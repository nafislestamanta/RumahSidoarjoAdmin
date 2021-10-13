  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-keyboard"></i><b style="padding-left:5px">Tambah Informasi Layanan</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LayananPublik/save_informasi') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Informasi Layanan</label>
                                      <input name="nama" id="nama" type="text" class="form-control"
                                          placeholder="Nama Informasi Layanan" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi Layanan</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"
                                          required oninvalid="this.setCustomValidity('Deskripsi tidak boleh kosong!')"
                                          oninput="setCustomValidity('')"></textarea>
                                      <?= form_error('deskripsi', '<small class="text-danger pl-2">', '</small>');  ?>
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
  </div>