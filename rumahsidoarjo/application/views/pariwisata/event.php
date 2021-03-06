  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="far fa-calendar-alt"></i><b style="padding-left:5px">EVENT</b></h5>
      </div>

      <!-- Content -->

      <div class="card shadow mb-4">
          <div>
              <div class="card-header py-3">
                  <div class="col-auto">
                      <a href="<?= base_url('pariwisata/tambah_event'); ?>" class="btn-sm btn-primary"><i
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
                                      <th>Kategori</th>
                                      <th>Nama Event</th>
                                      <th>Tempat Kegiatan</th>
                                      <th>Action</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>


                                  <td class="text-center">
                                      <a href="<?= base_url('Pariwisata/edit_event'); ?>"
                                          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                      <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                      <a href="<?= base_url('Pariwisata/detail_event'); ?>"
                                          class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                  </td>
                              </tr>

                          </tbody>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

      </div>