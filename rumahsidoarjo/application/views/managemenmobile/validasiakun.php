  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-id-badge"></i><b> VALIDASI AKUN</b></h5>
      </div>

      <!-- Begin Page Content -->


      <!-- Content -->
      <div class="card shadow mb-4">
      <div>
      <div class="card-header py-3">
          <div class="col-auto" >
            <a href="<?= base_url('managemenmobile/tambah_validasi'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
            <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
        </div>
      </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>No</th>
                                  <th>NIK</th>
                                  <th>Nama</th>
                                  <th>Alamat</th>
                                  <th>Email</th>
                                  <th>Tanggal Lahir</th>
                                  <th>Jenis Kelamin</th>
                                  <th>No. Telepon</th>
                                  <th>Password</th>
                                  <th>Foto KTP</th>
                                  <th>Foto Selfie</th>
                                  <th>Selfie KTP</th>
                                  <th>Action</th>

                              </b> </tr>
                      </thead>

                      <tbody>
                          <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td  class="text-center">
                            <a href="<?= base_url('Managemenmobile/edit_validasi') ?>" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#>"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#>"><i class="fa fa-eye"></i></button>
                         </td>
                          </tr>




                          </tr>
                  </table>
              </div>
          </div>
      </div>


  </div>