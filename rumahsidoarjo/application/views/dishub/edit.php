  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Data Cctv</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Dishub/updatecctv/' . $edit->id_cctv); ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <!-- <div class="form-group">
                                      <label>ID Cctv</label>
                                      <input name="id_cctv" id="id_cctv" required class="form-control"
                                          value="<?= $edit->id_cctv ?>">
                                  </div> -->

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Nama Cctv</label>
                                      <input name="nama" id="nama" type="text" value="<?= $edit->nama ?>"
                                          class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Alamat Cctv</label>
                                      <input name="alamat" id="alamat" type="text" value="<?= $edit->alamat ?>"
                                          class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Status Cctv</h6>
                                      </label>
                                      <select class="form-control" name="status" id="status">
                                          <option value="Aktif" <?php if ($edit->status == 'Aktif') echo 'selected'; ?>>
                                              Aktif
                                          </option>
                                          <option value="Tidak Aktif"
                                              <?php if ($edit->status == 'Tidak Aktif') echo 'selected'; ?>>Tidak Aktif
                                          </option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Link</label>
                                      <input name="link" id="link" type="text" class="form-control"
                                          value="<?= $edit->link ?>" placeholder="Masukkan link">
                                  </div>
                                  <div class="card-footer">
                                      <button type="submit" class="btn-sm btn-primary">Update</button>
                                      <a class="btn btn-warning" href="<?= base_url('Dishub'); ?>"
                                          role="button">kembali</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>
  </div>