  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Komunitas</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Komunitas/update_komunitas/' . $edit->id_komunitas); ?>"
                      method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama Komunitas</label>
                                      <input name="nama_komunitas" id="nama_komunitas" type="text" class="form-control"
                                          placeholder="Nana komunitas" value="<?= $edit->nama_komunitas ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Ketua / Penanggung Jawab</label>
                                      <input name="ketua" id="ketua" type="text" class="form-control"
                                          value="<?= $edit->ketua ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea name="alamat" id="alamat" value="<?= $edit->alamat ?>"
                                          class="form-control"><?= $edit->alamat ?></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="text" class="form-control"
                                          value="<?= $edit->no_tlp ?>">
                                  </div>


                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" type="text" cols="30" rows="5"
                                          value="<?= $edit->deskripsi ?>"
                                          class="form-control"><?= $edit->deskripsi ?></textarea>
                                  </div>

                                  <!-- <div class="form-group">
                                      <label>Deskripsi</label>
                                      <input name="deskripsi" id="deskripsi" type="text" class="form-control"
                                          value="<?= $edit->deskripsi ?>">
                                  </div> -->

                                  <div class="form-group">
                                      <label>Sosial Media</label>
                                      <input name="sosialmedia" id="sosialmedia" type="text" class="form-control"
                                          value="<?= $edit->sosialmedia ?>">
                                  </div>









                                  <table class="table table-bordered" width="90%" cellspacing="0">
                                      <thead>
                                          <tr class="text-center"><b>
                                                  <th>Gambar 1</th>
                                                  <th>Gambar 2</th>
                                                  <th>Gambar 3</th>
                                              </b>
                                          </tr>
                                      </thead>
                                      <tbody class="text-center">
                                          <tr>
                                              <td>
                                                  <?= $this->session->flashdata('alert'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto1); ?>"
                                                          id="foto1" width="100px" alt="Belum Upload"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar<?= $edit->id_komunitas ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                              <td>
                                                  <?= $this->session->flashdata('alert1'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto2); ?>"
                                                          id="foto2" width="100px" alt="Belum Upload"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar2<?= $edit->id_komunitas ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                              <td>
                                                  <?= $this->session->flashdata('alert2'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto_profil); ?>"
                                                          id="foto_profil" width="100px" alt="Belum Upload"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar3<?= $edit->id_komunitas ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>

                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-info">Update</button>
                                      <a class="btn btn-warning" href="<?= base_url('Komunitas'); ?>"
                                          role="button">kembali</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
          id="editmodalgambar<?= $edit->id_komunitas ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal"
                      action="<?php echo base_url('Komunitas/simpanGambar/' . $edit->id_komunitas) ?>" method="post"
                      enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto1); ?>" id="foto1" width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto1" name="foto1" accept="image/png, .jpeg, .jpg"
                                  onchange="gambar11(this.value)">
                              <div class="col-lg-10">
                                  <br>
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                  <img src="holder.jpg" id="foto11" width="150px">
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                          <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
          id="editmodalgambar2<?= $edit->id_komunitas ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal"
                      action="<?php echo base_url('Komunitas/simpanGambar/' . $edit->id_komunitas) ?>" method="post"
                      enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto2); ?>" id="foto2" width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto2" name="foto2" accept="image/png, .jpeg, .jpg"
                                  onchange="gambar22(this.value)">
                              <div class="col-lg-10">
                                  <br>
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                  <img src="holder.jpg" id="foto22" width="150px">
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                          <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
          id="editmodalgambar3<?= $edit->id_komunitas ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal"
                      action="<?php echo base_url('Komunitas/simpanGambar/' . $edit->id_komunitas) ?>" method="post"
                      enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto_profil); ?>" id="foto3"
                                      width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto_profil" name="foto_profil" accept="image/png, .jpeg, .jpg"
                                  onchange="gambar33(this.value)">
                              <div class="col-lg-10">
                                  <br>
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                  <img src="holder.jpg" id="foto33" width="150px">
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                          <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      function gambar11(val) {
          $("#foto11").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>

      <script type="text/javascript">
      function gambar22(val) {
          $("#foto22").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>

      <script type="text/javascript">
      function gambar33(val) {
          $("#foto33").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>
  </div>