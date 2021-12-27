  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Lowongan</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('LowonganKerja/update_lowongan/' . $edit->id_lowongan); ?> "
                      method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Judul Lowongan</label>
                                      <input name="judul_lowongan" id="judul_lowongan" type="text" class="form-control"
                                          placeholder="Judul Lowongan" value="<?= $edit->judul_lowongan ?>">
                                  </div>

                                  <div class="row">
                                      <div class="col-sm-12">
                                          <!-- text input -->
                                          <div class="form-group">
                                              <label for="enum">
                                                  <h6 class="m-0 font-weight-bold text-dark">Perusahaan</h6>
                                              </label>
                                              <select class="form-control" name="nama_perusahaan" id="nama_perusahaan">
                                                  <!-- <opztion>Pilih Perusahaan</opztion> -->
                                                  <?php foreach ($perusahaan as $k) : ?>
                                                  <option value="<?= $k->id ?>"
                                                      <?php if ($k->id == $edit->id)                                                                                   echo 'selected'; ?>>
                                                      <?= $k->nama_perusahaan ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                              <?= form_error('nama_perusahaan', '<small class="text-danger pl-2">', '</small>');  ?>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="m-0 font-weight-bold text-dark">Deskripsi Pekerjaan</label>
                                      <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan"
                                          value="<?= $edit->deskripsi_pekerjaan ?>"
                                          class="form-control"><?= $edit->deskripsi_pekerjaan ?></textarea>
                                  </div>





                                  <table class="table table-bordered" width="90%" cellspacing="0">
                                      <thead>
                                          <tr class="text-center"><b>
                                                  <th>Poster Iklan</th>
                                                  <th>Gambar</th>
                                              </b>
                                          </tr>
                                      </thead>
                                      <tbody class="text-center">
                                          <tr>
                                              <td>
                                                  <?= $this->session->flashdata('alert'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto_lowongan); ?>"
                                                          id="foto_lowongan" width="150px"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar<?= $edit->id_lowongan ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                              <td>
                                                  <?= $this->session->flashdata('alert1'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->file); ?>" id="file"
                                                          width="150px"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar2<?= $edit->id_lowongan ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>


                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-info">Update</button>
                                      <a class="btn btn-warning" href="<?= base_url('LowonganKerja/lowongan'); ?>"
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
          id="editmodalgambar<?= $edit->id_lowongan ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal"
                      action="<?php echo base_url('LowonganKerja/simpanGambarLowongan/' . $edit->id_lowongan) ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->foto_lowongan); ?>" id="foto_lowongan"
                                      width="150px">
                              </div>
                              <br>
                              <input type="file" id="foto_lowongan" name="foto_lowongan" accept="image/png, .jpeg, .jpg"
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
          id="editmodalgambar2<?= $edit->id_lowongan ?>" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                  </div>
                  <form class="form-horizontal"
                      action="<?php echo base_url('LowonganKerja/simpanGambarLowongan/' . $edit->id_lowongan) ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <div class="modal-body">
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                  <img src="<?= base_url('assets/img/' . $edit->file); ?>" id="file" width="150px">
                              </div>
                              <br>
                              <input type="file" id="file" name="file" accept="image/png, .jpeg, .jpg"
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
  </div>