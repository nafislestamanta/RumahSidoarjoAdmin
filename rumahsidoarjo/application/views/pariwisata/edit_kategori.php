  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Kategori Tempat Wisata</h1>
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content -->
    <div class="col">
      <div class="card card-primary">
        <dic class="card-body">
          <form action="<?= base_url('Pariwisata/savekategori/' . $edit->id_kategori_wisata); ?>" method="post">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="<?= $edit->kategori ?>">
                  <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?>
                </div>
              </div>
            </div>


            <!--div button-->
            <div class="row">
              <div class="form-group">
                <button type="submit" class="btn btn-primary ">Simpan</button>
                <a href="<?= base_url('Pariwisata/kategoriwisata') ?>" class="btn btn-success"> Kembali</a>

              </div>
            </div>
            <?= form_close() ?>
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
    function gambar(val) {
      $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
    }
  </script>