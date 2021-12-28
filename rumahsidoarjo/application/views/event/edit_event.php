  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-edit"></i><b style="padding-left:5px">Edit Event</b></h5>
      </div>

      <!-- Main content Ini Bagian Content -->
      <section class="content">
          <div class="col">
              <div class="card card-primary">
                  <form action="<?php echo base_url('Event/update_event/' . $edit->id_event); ?> " method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <label for="enum">
                                          <h6 class="m-0 font-weight-bold text-dark">Pilih Kategori</h6>
                                      </label>
                                      <select class="form-control" name="kategori" id="kategori">
                                          <option value="Agenda Kota"
                                              <?php if ($edit->kategori == 'Agenda Kota') echo 'selected'; ?>>Agenda
                                              Kota
                                          </option>
                                          <option value="Lomba Budaya"
                                              <?php if ($edit->kategori == 'Lomba Budaya') echo 'selected'; ?>>Lomba Dan
                                              Budaya
                                          </option>


                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Nama Event</label>
                                      <input name="nama_event" id="nama_event" type="text" class="form-control"
                                          placeholder="Masukkan Nama Event" value="<?= $edit->nama_event ?>"
                                          oninvalid="this.setCustomValidity('Nama Event Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Tanggal Publish</label>
                                      <input name="tgl_posting" id="tgl_posting" type="date"
                                          value="<?= $edit->tgl_posting ?>" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label>Penyelenggara</label>
                                      <input name="penyelenggara" id="pentelenggara" type="text" class="form-control"
                                          placeholder="Masukkan Nama Penyelenggara" value="<?= $edit->penyelenggara ?>"
                                          oninvalid="this.setCustomValidity('Nama Penyelenggara Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">

                                  </div>

                                  <div class="form-group">
                                      <label>Lokasi</label>
                                      <input name="tempat_kegiatan" id="tempat_kegiatan" type="text"
                                          class="form-control" placeholder="Masukkan Tempat Kegiatan"
                                          value="<?= $edit->tempat_kegiatan ?>"
                                          oninvalid="this.setCustomValidity('Lokasi Event Tidak Boleh Kosong!')"
                                          oninput="setCustomValidity('')">
                                  </div>

                                  <div class="form-group">
                                      <label>Deskripsi</label>
                                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="5"
                                          value="<?= $edit->deskripsi ?>"
                                          class="form-control"><?= $edit->deskripsi ?></textarea>
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
                                                          data-target="#editmodalgambar<?= $edit->id_event ?>"
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
                                                          data-target="#editmodalgambar2<?= $edit->id_event ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                              <td>
                                                  <?= $this->session->flashdata('alert2'); ?>
                                                  <div class="form-group">
                                                      <img src="<?= base_url('assets/img/' . $edit->foto3); ?>"
                                                          id="foto3" width="100px" alt="Belum Upload"> <br>
                                                      <a data-toggle="modal" type="submit"
                                                          data-target="#editmodalgambar3<?= $edit->id_event ?>"
                                                          class="btn-sm btn-primary">Ubah</a>
                                                      <?= form_error('gambar', '<small class="text-danger pl-2">', '</small>');  ?>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>














                                  <!-- <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          value="<?= $edit->foto1 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="100px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          value="<?= $edit->foto2 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="100px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto3" name="foto3"
                                          value="<?= $edit->foto3 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="100px">
                                  </div> -->

                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                  <a class="btn btn-warning" href="<?= base_url('Event'); ?>" role="button">kembali</a>
                              </div>
                          </div>
                      </div>
              </div>
              </form>
          </div>
  </div>
  </section>


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
      id="editmodalgambar<?= $edit->id_event ?>" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Event/simpanGambar/' . $edit->id_event) ?>"
                  method="post" enctype="multipart/form-data" role="form">
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
      id="editmodalgambar2<?= $edit->id_event ?>" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Event/simpanGambar/' . $edit->id_event) ?>"
                  method="post" enctype="multipart/form-data" role="form">
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
      id="editmodalgambar3<?= $edit->id_event ?>" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Umkm/simpanGambar/' . $edit->id_event) ?>"
                  method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <div class="form-group">
                          <div class="col-lg-10">
                              <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                              <img src="<?= base_url('assets/img/' . $edit->foto3); ?>" id="foto3" width="150px">
                          </div>
                          <br>
                          <input type="file" id="foto3" name="foto3" accept="image/png, .jpeg, .jpg"
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