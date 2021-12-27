  <div class="container-fluid">
      <div class="mb-4">
          <h6><i class="fas fa-home"></i><b> DASHBOARD UMKM</b></h6>
      </div>
      <script src="<?php echo base_url() ?>assets/vendor/chart.js"></script>
      <!-- Content Row -->
      <div class="row">
          <div class="col-xl-3 col-md-3 mb-5">
              <div class="card border-left-info">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold text-info mb-1" style="padding-left: 15px;">
                                  K-Kerajinan
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $kerajinan->total ?></div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-pencil-ruler fa-4x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('Umkm/tampil_kerajinan'); ?>" aria-current="page" style="color:black">
                          Detail
                          <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-md-3 mb-5">
              <div class="card border-left-success">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold text-success mb-1" style="padding-left: 15px;">
                                  K-Makanan
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $makanan->total ?></div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-utensils fa-4x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('Umkm/tampil_makanan'); ?>" aria-current="page" style="color:black"> Detail
                          <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-md-3 mb-5">
              <div class="card border-left-warning">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold text-warning mb-1" style="padding-left: 15px;">
                                  K-Pertanian
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $pertanian->total ?></div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-tractor fa-4x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('Umkm/tampil_pertanian'); ?>" aria-current="page" style="color:black">
                          Detail
                          <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

      </div>

      <!-- Content Grafik -->