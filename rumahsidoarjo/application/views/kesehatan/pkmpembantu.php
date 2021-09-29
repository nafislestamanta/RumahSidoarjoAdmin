  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-stethoscope"></i><b style="padding-left:5px">PKM PEMBANTU</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
      <div>
      <div class="card-header py-3">
          <div class="col-auto" >
            <a href="<?= base_url('kesehatan/tambahpkmu'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
            <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
        </div>
      </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>No</th>
                                  <th>Nama PKM Pembantu</th>
                                  <th>Alamat</th>
                                  <th>Pengelola</th>
                                  <th>No. Telepon</th>
                                  <th>Longitude</th>
                                  <th>Langitude</th>
                                  <th>Deskripsi</th>
                                  <th>Foto</th>
                                  <th>Link</th>
                                  <th>Action</th>
                              </b>
                          </tr>
                      </thead>

                      <tbody>
                          <tr>
                              <td scope="row">1</td>
                              <td>RSUD Sidoarjo</td>
                              <td>RSU</td>
                              <td>B</td>
                              <td>Pemerintah</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              
                              <td  class="text-center">
                                <a href="<?= base_url('Kesehatan/editpkmp'); ?>" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#>"><i class="fa fa-trash"></i></button>
                              </td>
                          </tr>

                         

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>