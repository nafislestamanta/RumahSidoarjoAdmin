  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Layanan Publik </h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->

      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('layananpublik/tambah_layanan'); ?>" class="btn-sm btn-primary"><i
                              class="fas fa-plus" style="padding-right: 8px;"></i>Tambah Data</a>
                      <a href="<?= base_url(''); ?>" class="btn-sm btn-success"><i class="fas fa-download"
                              style="padding-right: 8px;"></i>Report</a>
                  </div>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama Layanan</th>
                                      <th>Deskripsi</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td class="text-center">
                                      <a href="<?= base_url('LayananPublik/edit_layanan'); ?>"
                                          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                      <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                                      </a>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>