  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-edit"></i><b style="padding-left:5px">Edit Kategori</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LayananPublik/update_kategori/' . $edit->id_kategorilayanan); ?> "
                      method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama kategori</label>
                                      <input name="nama_kategori" id="nama_kategori" type="text" class="form-control"
                                          placeholder="Nama Kategori" value="<?= $edit->nama_kategori ?>">
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

  </div>