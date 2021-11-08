  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h5><i class="fas fa-book"></i><b> Managemen Data</b></h5>
      </div>

      <!-- Content -->
      <!-- Begin Page Content -->

      <!-- Content -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php if ($title == "Kantor Polisi") : ?>
                  Kantor Polisi
                  <?php elseif ($title == "Rumah Sakit") : ?>
                  Rumah Sakit
                  <?php elseif ($title == "Bencana") : ?>
                  BPBD
                  <?php endif; ?>

              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('PanikMenu'); ?>">Kantor Polisi</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/rumahsakit'); ?>">Rumah Sakit</a>
                  <a class="dropdown-item" href="<?= base_url('PanikMenu/bencana'); ?>">BPBD</a>
              </div>
              <?php if ($title == "Kantor Polisi") : ?>
              <a href="<?= base_url('PanikMenu/tambah_kantorpolisi'); ?>" class="btn btn-primary"><i class="fas fa-plus"
                      style="padding-right: 5px;"></i>Tambah Data</a>
              <a style="float: right;" href="<?= base_url('PanikMenu/'); ?>" target="_blank" class="btn btn-primary"><i
                      class="fas fa-download" style="padding-right: 5px;"></i>Report</a>
              <?php elseif ($title == "Rumah Sakit") : ?>
              <a style="float: right;" href="<?= base_url('PanikMenu/'); ?>" target="_blank" class="btn btn-primary"><i
                      class="fas fa-download" style="padding-right: 5px;"></i>Report</a>
              <?php elseif ($title == "Bencana") : ?>
              <a href="<?= base_url('PanikMenu/tambah_Bencana'); ?>" class="btn btn-primary"><i class="fas fa-plus"
                      style="padding-right: 5px;"></i>Tambah Data</a>
              <a style="float: right;" href="<?= base_url('PanikMenu/'); ?>" target="_blank" class="btn btn-primary"><i
                      class="fas fa-download" style="padding-right: 5px;"></i>Report</a>
              <?php endif; ?>
          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-center"><b>
                                  <th>Kode</th>
                                  <?php if ($title == "Kantor Polisi") : ?>
                                  <th>Nama Kantor</th>
                                  <?php elseif ($title == "Rumah Sakit") : ?>
                                  <th>Nama Rumah Sakit</th>
                                  <?php elseif ($title == "Bencana") : ?>
                                  <th>BPBD</th>
                                  <?php endif; ?>
                                  <th>Penanggung Jawab</th>
                                  <th>Kecamatan</th>
                                  <th>Alamat</th>
                                  <th>No Telepon</th>
                                  <th>Actions</th>

                              </b> </tr>
                      </thead>

                      <tbody>
                          <?php if ($title == "Bencana") :
                                foreach ($Bencana as $d) : ?>
                          <tr>
                              <td><?= $d->id_bpbd ?></td>
                              <td><?= $d->nama ?></td>
                              <td><?= $d->penanggungjawab ?></td>
                              <td><?= $d->kecamatan ?></td>
                              <td><?= $d->alamat ?></td>
                              <td><?= $d->no_tlp ?></td>
                              <td><a href="<?= base_url('PanikMenu/edit_Bencana/' . $d->id_bpbd); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('PanikMenu/detail_bencana/' . $d->id_bpbd); ?>"
                                      class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('PanikMenu/delete_Bencana/' . $d->id_bpbd); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>

                          </tr>
                          <?php endforeach; ?>

                          <?php elseif ($title == "Rumah Sakit") :
                                foreach ($rumahsakit as $r) : ?>
                          <tr>
                              <td><?= $r->id_kesehatan ?></td>
                              <td><?= $r->nama ?></td>
                              <td><?= $r->penanggung_jawab ?></td>
                              <td><?= $r->kecamatan ?></td>
                              <td><?= $r->alamat ?></td>
                              <td><?= $r->no_telepon ?></td>
                              <td><a href="<?= base_url('Kesehatan/edit_rsu/' . $r->id_kesehatan); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('PanikMenu/detail_rsu/' . $r->id_kesehatan); ?>"
                                      class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('PanikMenu/delete_rumahsakit/' . $r->id_kesehatan); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                          </tr>
                          <?php endforeach; ?>

                          <?php else :
                                foreach ($kantorpolisi as $k) : ?>
                          <tr>
                              <td><?= $k->id_kantor_polisi ?></td>
                              <td><?= $k->nama_kantor_polisi ?></td>
                              <td><?= $k->penanggungjawab ?></td>
                              <td><?= $k->kecamatan ?></td>
                              <td><?= word_limiter($k->alamat, 3); ?></td>
                              <td><?= $k->no_tlp ?></td>
                              <td><a href="<?= base_url('PanikMenu/edit_kantorpolisi/' . $k->id_kantor_polisi); ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('PanikMenu/detail_kantorpolisi/' . $k->id_kantor_polisi); ?>"
                                      class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                      style="margin-left: 5px;"
                                      href="<?= base_url('PanikMenu/delete_kantorpolisi/' . $k->id_kantor_polisi); ?>"
                                      onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                          </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>

                          </tr>
                  </table>
              </div>
          </div>
      </div>
  </div>