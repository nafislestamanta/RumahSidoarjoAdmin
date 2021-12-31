  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Perusahaan</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LowonganKerja/update_perusahaan/' . $edit->id); ?> " method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Nama Perusahaan</label>
                                      <input name="nama_perusahaan" id="nama_perusahaan" type="text" class="form-control" placeholder="Nana Perusahaan" value="<?= $edit->nama_perusahaan ?>">
                                  </div>

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6>Kepemilikan</h6>
                                      </label>
                                      <select class="form-control" name="kepemilikan" id="kepemilikan">
                                          <option value="Pemerintah" <?php if ($edit->kepemilikan == 'Pemerintah') echo 'selected'; ?>>
                                              Pemerintah
                                          </option>
                                          <option value="Swasta" <?php if ($edit->kepemilikan == 'Swasta') echo 'selected'; ?>>Swasta
                                          </option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea name="alamat" id="alamat" value="<?= $edit->alamat ?>" class="form-control"><?= $edit->alamat ?></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>No Telepon</label>
                                      <input name="no_tlp" id="no_tlp" type="number" class="form-control" value="<?= $edit->no_tlp ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Email</label>
                                      <input name="email" id="email" type="email" class="form-control" value="<?= $edit->email ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Lat</label>
                                      <input name="lat" id="lat" type="text" class="form-control" value="<?= $edit->lat ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Long</label>
                                      <input name="long" id="long" type="text" class="form-control" value="<?= $edit->long ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Website</label>
                                      <input name="website" id="website" type="text" class="form-control" value="<?= $edit->website ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Penanggung Jawab</label>
                                      <input name="penanggung_jawab" id="penanggung_jawab" type="text" class="form-control" value="<?= $edit->penanggung_jawab ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <input name="deskripsi" id="deskripsi" type="text" class="form-control" value="<?= $edit->deskripsi ?>">
                                  </div>

                                  <tr>
                                      <td>Gambar</td>
                                      <td>
                                          <?= $this->session->flashdata('alert'); ?>
                                          <div class="form-group">
                                              <br>
                                              <img src="<?= base_url('assets/img/' . $edit->foto); ?>" id="foto" width="150px">
                                              <a data-toggle="modal" type="submit" data-target="#editmodalgambar<?= $edit->id ?>" class="btn-sm btn-primary">Edit</a>
                                              <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </div>
                                      </td>
                                  </tr>

                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-info">Update</button>
                                      <a class="btn btn-warning" href="<?= base_url('LowonganKerja'); ?>" role="button">kembali</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>


      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalgambar<?= $edit->id ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url('LowonganKerja/simpanGambar/' . $edit->id) ?>" method="post" enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto); ?>" id="foto" width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto" name="foto" accept="image/png, .jpeg, .jpg" onchange="gambar11(this.value)">
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
          function gambar11(val) {
              $("#foto11").attr('src', URL.createObjectURL(event.target.files[0]));
          }
      </script>
  </div>