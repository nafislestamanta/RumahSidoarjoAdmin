  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-video"></i><b style="padding-left:5px">Tambah Data CCTV</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Dishub/savecctv') ?> " method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama Cctv</label>
                                      <input name="nama" id="nama" type="text" class="form-control"
                                          placeholder="Masukkan Nama Cctv" required
                                          oninvalid="this.setCustomValidity('Judul Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Alamat Cctv</label>
                                      <input name="alamat" id="alamat" type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Status Cctv</h6>
                                      </label>
                                      <select class="form-control" name="status" id="status">
                                          <option value="Aktif">Aktif</option>
                                          <option value="Tidak Aktif">Tidak Aktif</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Link</label>
                                      <input name="link" id="link" type="text" class="form-control"
                                          placeholder="Masukkan link">
                                  </div>
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>

                                  </div>
                              </div>
                          </div>
                  </form>
              </div>
          </div>
      </section>
  </div>