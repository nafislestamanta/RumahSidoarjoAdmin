  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-video"></i><b style="padding-left:5px">CCTV</b></h5>
      </div>

      <!-- Content -->
      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('Dishub/addcctv'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                              style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url('Dishub/addcctv'); ?>" class="btn-sm btn-success"><i class="fas fa-download"
                              style="padding-right: 8px;"></i>Report</a>
                  </div>
              </div>

              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                          <thead>
                              <tr class="text-center"><b>
                                      <th>Kode CCTV</th>
                                      <th>Nama CCTV </th>
                                      <th>Alamat</th>
                                      <th>Status</th>
                                      <th>Link</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td scope="row">1</td>
                                  <td>Pendopo Alun-Alun Kabupaten Sidoarjo</td>
                                  <td></td>
                                  <td></td>
                                  <td>August 3, 2019 12:32 PM</td>

                                  <td class="text-center">
                                      <a href="<?= base_url('Dishub/edit'); ?>" class="btn btn-warning btn-sm"><i
                                              class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                                  </td>
                              </tr>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>