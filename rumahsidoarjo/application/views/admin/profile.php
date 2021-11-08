  <!-- Begin Page Content -->
  <div class="container-fluid">

      <h5 class="text-center font-weight-bold text-info">PROFILE</h5>
      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Admin/update_profile/' . $user->id_admin); ?> " method="POST"
                      enctype="multipart/form-data">

                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <td>ID Admin</td>
                                  <td><?= $user->id_admin ?></td>
                              </tr>

                              <tr>
                                  <td>NIP</td>
                                  <td> <input name="nip" id="nip" type="number" value="<?= $user->nip ?>"
                                          class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Nama</td>
                                  <td> <input name="nama" id="nama" type="text" value="<?= $user->nama ?>"
                                          class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Alamat</td>
                                  <td> <input name="alamat" id="alamat" type="text" value="<?= $user->alamat ?>"
                                          class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>No Telepon</td>
                                  <td> <input name="no_tlp" id="no_tlp" type="number" value="<?= $user->no_tlp ?>"
                                          class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Email</td>
                                  <td> <input name="email" id="email" type="text" value="<?= $user->email ?>"
                                          class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Foto Profile</td>
                                  <td><input type="file" id="foto" accept="image/png, .jpeg, .jpg" name="foto"
                                          onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Username</td>
                                  <td> <input name="username" id="username" type="text" value="<?= $user->username ?>"
                                          class="form-control" style="border: transparent;">
                                  </td>
                              </tr>

                              <tr>
                                  <td>Password</td>
                                  <td> <input name="password" id="password" type="text" value="<?= $user->password ?>"
                                          class="form-control" style="border: transparent;">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function foto(val) {
    $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>