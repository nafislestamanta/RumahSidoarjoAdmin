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

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto1" name="foto1"
                                          value="<?= $edit->foto1 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto2" name="foto2"
                                          value="<?= $edit->foto2 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

                                  <div class="form-group">
                                      <label>Pilih Gambar</label> <br>
                                      <input type="file" accept="image/png, .jpeg, .jpg" id="foto3" name="foto3"
                                          value="<?= $edit->foto3 ?>" onchange="foto(this.value)">
                                      <img src="holder.jpg" id="ayam" name="ayam" width="150px">
                                  </div>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function foto(val) {
    $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>
  </div>