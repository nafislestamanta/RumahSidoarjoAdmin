  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-umbrella-beach"></i></i><b style="padding-left:5px">Tempat Wisata</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
      <div>
      <div class="card-header py-3">
          <div class="col-auto" >
            <a href="<?= base_url('pariwisata/tambah_wisata'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
            <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
        </div>
      </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                          <th>No</th>
                                  <th>Kategori</th>
                                  <th>Nama</th>
                                  <th>Alamat</th>
                                  <th>Pengelola</th>
                                  <th>Telepon</th>
                                  <th>Jam Buka</th>
                                  <th>Jam Tutup</th>
                                  <th>Harga Tiket</th>
                                  <th>Deskripsi</th>
                                  <th>Foto</th>
                                  <th>Lat</th>
                                  <th>Long</th>
                                  <th>Action</th>
                              </b>
                          </tr>
                      </thead>

                      <tbody>
                          <tr>
                              <td></td>
                              <td>Pemancingan</td>
                              <td>Kolam Pemancingan dan Outbound Kusuma Tirta Minapolitan</td>
                              <td>CANDI</td>
                              <td>KEDUNGPELUK</td>
                              <td></td>
                              <td>Rp. 4,000</td>
                              <td>Harga Per kilo</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              
                              <td  class="text-center">
                                <a href="<?= base_url('Pariwisata/edit_wisata'); ?>" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#>"><i class="fa fa-trash"></i></button>
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#>"><i class="fa fa-eye"></i></button>
                              </td>
                          </tr>

                      </tbody>
                         

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>