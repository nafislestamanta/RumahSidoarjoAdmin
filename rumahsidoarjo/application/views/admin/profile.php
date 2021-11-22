  <!-- Begin Page Content -->
  <div class="container-fluid">

      <h5 class="text-center font-weight-bold text-info">PROFILE</h5>
      <?= $this->session->flashdata('message'); ?>
      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Admin/update_profile/' . $user->id_admin); ?> " method="POST" enctype="multipart/form-data">

                      <table class="table table-bordered">
                          <thead>

                              <tr>
                                  <td>NIP</td>
                                  <td> <input name="nip" id="nip" type="number" value="<?= $user->nip ?>" class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Nama</td>
                                  <td> <input name="nama" id="nama" type="text" value="<?= $user->nama ?>" class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Alamat</td>
                                  <td> <input name="alamat" id="alamat" type="text" value="<?= $user->alamat ?>" class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>No Telepon</td>
                                  <td> <input name="no_tlp" id="no_tlp" type="number" value="<?= $user->no_tlp ?>" class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Email</td>
                                  <td> <input name="email" id="email" type="text" value="<?= $user->email ?>" class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Foto Profile</td>
                                  <td><input type="file" id="foto" accept="image/png, .jpeg, .jpg" name="foto" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Username</td>
                                  <td><?= $user->username ?></td>
                                  </td>
                              </tr>

                              <tr>
                                  <td>Password</td>
                                  <td><a data-toggle="modal" type="submit" data-target="#edit-data" class="btn btn-outline-primary">Ubah Password</a>
                                  </td>
                              </tr>
                          </thead>
                      </table>
                      <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a class="btn btn-warning" href="<?= base_url('Dashboard'); ?>" role="button">kembali</a>
                      </div>
                  </form>
              </div>

          </div>
      </section>
  </div>

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                  <h4 class="modal-title">Ubah Password</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Admin/ubah_password/' . $user->id_admin) ?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <input type="text" hidden name="id" id="id" value="<?= $user->id_admin ?>">
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Password Baru</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control" name="pabar" placeholder="Masukkan password baru">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-5 col-sm-5 control-label">Ulang Password</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control" name="ulpa" placeholder="Masukkan ulang password baru">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
      function foto(val) {
          $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
      }
  </script>