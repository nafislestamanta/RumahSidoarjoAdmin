  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-keyboard"></i><b style="padding-left:5px">Tambah Kategori Informasi</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LayananPublik/save_kategori') ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Kategori</label>
                                      <input name="nama_kategori" id="nama_kategori" type="text" class="form-control"
                                          placeholder="Nama Kategori" required
                                          oninvalid="this.setCustomValidity('Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                      <?= form_error('nama_kategori', '<small class="text-danger pl-2">', '</small>');  ?>
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