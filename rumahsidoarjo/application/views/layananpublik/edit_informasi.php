  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-edit"></i><b style="padding-left:5px">Edit Informasi</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LayananPublik/update_informasi/' . $edit->id_layanan); ?> "
                      method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama Informasi Layanan</label>
                                      <input name="nama" id="nama" type="text" class="form-control"
                                          placeholder="Nama Informasi Layanan" value="<?= $edit->nama ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <input name="deskripsi" id="deskripsi" type="text" class="form-control"
                                          value="<?= $edit->deskripsi ?>">
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