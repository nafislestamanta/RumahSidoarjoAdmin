  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Admin</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <form action="<?php echo base_url('Admin/simpanAdmin/' . $edit->id_admin); ?> " method="POST" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>NIP</label>
                                  <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukan NIP" value="<?= $edit->nip ?>">
                                  <?= form_error('nip', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" readonly class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?= $edit->username ?>">
                                  <?= form_error('username', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label for="enum">
                                      <h6 class="m-0">Role Admin</h6>
                                  </label>
                                  <select class="form-control" name="role" id="role">
                                      <option value="" selected disabled>Role</option>
                                      <?php foreach ($role as $r) : ?>
                                          <option value="<?= $r->id_role ?>" <?php if ($r->id_role == $edit->id_role) echo 'selected'; ?>><?= $r->nama_role ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                  <?= form_error('role', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $edit->nama ?>">
                                  <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Alamat</label>
                                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $edit->alamat ?>">
                                  <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>No Telepon</label>
                                  <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Masukkan No Telepon" value="<?= $edit->no_tlp ?>">
                                  <?= form_error('notelp', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= $edit->email ?>">
                                  <?= form_error('email', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label>Pilih Gambar</label> <br>
                          <input type="file" id="gambar" name="gambar" onchange="foto(this.value)">
                          <img src="holder.jpg" id="ayam" name="ayam" width="150px"> <br>
                          <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?= $edit->password ?>">
                                  <?= form_error('password', '<small class="text-danger pl-2">', '</small>');  ?>
                              </div>
                          </div>
                      </div>

                      <!--div button-->
                      <div class="row">
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary ">Simpan</button>
                              <a href="<?= base_url('Admin') ?>" class="btn btn-success"> Kembali</a>

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
      function foto(val) {
          $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
      }
  </script>