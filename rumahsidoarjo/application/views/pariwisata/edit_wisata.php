  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Data Tempat Wisata</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
    <div class="card card-primary">
    <dic class="card-body">
    
      <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="Masukan Nama PKM Pembantu" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
     </div>

       <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="Masukkan Alamat" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Pengelola</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jam Buka</label>
                        <input type="" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jam Tutup</label>
                        <input type="" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Harga Tiket</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Lat</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>

        <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Long</label>
                        <input type="text" class="form-control" id=""  name=""  placeholder="" value="<?= set_value('')?>" >
                        <?= form_error('', '<small class="text-danger pl-2">', '</small>');  ?>
                      </div>
                    </div>
        </div>


        
       
        </div>

                <div class="form-group">
                        <label>Pilih Gambar</label> <br>
                        <input type="file" accept="image/png, .jpeg, .jpg" onchange="gambar(this.value)">
                        <img src="holder.jpg" id="foto" width="150px">
                </div>


                  <br>

                   <!--div button-->
 <div class="row">
     <div class="form-group">
     <button type="submit" class="btn btn-primary ">Simpan</button>
        <a href="<?=base_url('')?>" class="btn btn-success"> Kembali</a>
        
    </div> </div> 
     <?= form_close()?>
     </div>
      <!--end card body-->
    </div >
</div >
 <!--end div halaman add-->
    
  </div>
</div>
</div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      function gambar(val) {
          $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
      }
      </script>