  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Fasilitas dan Ekstrakulikuler</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      </div>

      <!-- Content -->
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <?= $this->session->flashdata('message'); ?>
                  <h1 class="h3 mb-0 font-weight-bold text-dark">Fasilitas Sekolah</h1>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                foreach ($fasilitas as $f) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $f->nama ?></td>
                              </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                  <br>
                  <?php if ($title == "Fasilitas dan Ekstrakulikuler SLB") : ?>
                  <a href="<?= base_url('Pendidikan/slb'); ?>" class="btn btn-success">Simpan</a>
                  <?php elseif ($title == "Fasilitas dan Ekstrakulikuler SMP") : ?>
                  <a href="<?= base_url('Pendidikan/smp'); ?>" class="btn btn-success">Simpan</a>
                  <?php else : ?>
                  <a href="<?= base_url('Pendidikan'); ?>" class="btn btn-success">Simpan</a>
                  <?php endif; ?>
                  <a data-toggle="modal" type="submit" data-target="#tambah-fasilitas"
                      class="btn btn-primary">Tambah</a>
              </div>
          </div>
      </div>
      <br>
      <br>
      <div class="col">
          <div class="card card-primary">
              <div class="card-body">
                  <?= $this->session->flashdata('ekskul'); ?>
                  <h1 class="h3 mb-0 font-weight-bold text-dark">Ekstrakulikuler Sekolah</h1>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center"><b>
                                      <th>No</th>
                                      <th>Nama</th>
                                  </b>
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no = 1;
                                foreach ($ekskul as $e) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $e->nama ?></td>
                              </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                  <br>
                  <?php if ($title == "Fasilitas dan Ekstrakulikuler SLB") : ?>
                  <a href="<?= base_url('Pendidikan/slb'); ?>" class="btn btn-success">Simpan</a>
                  <?php elseif ($title == "Fasilitas dan Ekstrakulikuler SMP") : ?>
                  <a href="<?= base_url('Pendidikan/smp'); ?>" class="btn btn-success">Simpan</a>
                  <?php else : ?>
                  <a href="<?= base_url('Pendidikan'); ?>" class="btn btn-success">Simpan</a>
                  <?php endif; ?>
                  <a data-toggle="modal" type="submit" data-target="#tambah-ekskul" class="btn btn-primary">Tambah</a>
              </div>
          </div>
      </div>

  </div>


  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-fasilitas"
      class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                  <h4 class="modal-title">Tambah Fasilitas</h4>
              </div>
              <?php if ($title == "Fasilitas dan Ekstrakulikuler SLB") : ?>
              <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_fasilitasSLB') ?>"
                  method="post" enctype="multipart/form-data" role="form">
                  <?php elseif ($title == "Fasilitas dan Ekstrakulikuler SMP") : ?>
                  <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_fasilitasSMP') ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <?php else : ?>
                      <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_fasilitas') ?>"
                          method="post" enctype="multipart/form-data" role="form">
                          <?php endif; ?>
                          <div class="modal-body">
                              <input type="text" hidden name="id" id="id" value="<?= $desc->id_sekolah ?>">
                              <div class="form-group">
                                  <label class="col-lg-5 col-sm-5 control-label">Nama Fasilitas</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" name="nama"
                                          placeholder="Tuliskan Nama Fasilitas">
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                              <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                          </div>
                      </form>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-ekskul"
      class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                  <h4 class="modal-title">Tambah Ekstrakulikuler</h4>
              </div>
              <?php if ($title == "Fasilitas dan Ekstrakulikuler SLB") : ?>
              <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_ekskul_slb') ?>"
                  method="post" enctype="multipart/form-data" role="form">
                  <?php elseif ($title == "Fasilitas dan Ekstrakulikuler SMP") : ?>
                  <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_ekskul_smp') ?>"
                      method="post" enctype="multipart/form-data" role="form">
                      <?php else : ?>
                      <form class="form-horizontal" action="<?php echo base_url('Pendidikan/tambah_ekskul') ?>"
                          method="post" enctype="multipart/form-data" role="form">
                          <?php endif; ?>
                          <div class="modal-body">
                              <input type="text" hidden name="id" id="id" value="<?= $desc->id_sekolah ?>">
                              <div class="form-group">
                                  <label class="col-lg-5 col-sm-5 control-label">Nama Ekstrakulikuler</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" name="nama"
                                          placeholder="Tuliskan Nama Ekstrakulikuler">
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                              <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                          </div>
                      </form>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
function foto(val) {
    $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
}
  </script>