  <div class="container-fluid">
      <div class="mb-4">
          <h6><i class="fas fa-home"></i><b> DASHBOARD RUMAH SIDOARJO 2 </b></h6>
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
                                  ADMIN
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $admin->total ?></div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-users-cog fa-5x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('Admin'); ?>" aria-current="page" style="color:black"> Detail
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
                                  User MOBILE
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $user->total ?></div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-users fa-4x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('ManagemenMobile'); ?>" aria-current="page" style="color:black"> Detail
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
                                  Validasi USER
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $user2->total ?></div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-user-plus fa-3x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('ManagemenMobile/validasi'); ?>" aria-current="page" style="color:black">
                          Detail
                          <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-md-3 mb-5">
              <div class="card border-left-danger">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold text-danger mb-1" style="padding-left: 15px;">
                                  Laporan PANIK
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $panik->total ?>
                              </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-radiation fa-4x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('PanikMenu/konfirmasi'); ?>" aria-current="page" style="color:black"> Detail
                          <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-md-3 mb-5">
              <div class="card border-left-danger">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold text-danger mb-1" style="padding-left: 15px;">
                                  Pengaduan UMUM
                              </div> <br>
                              <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                  <?php echo $pengaduan->total ?>
                              </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-radiation fa-3x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
                  <div class="btn bg-gradient-light text-center">
                      <a href="<?= base_url('LayananPublik/menunggu'); ?>" aria-current="page" style="color:black">
                          Detail
                          <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

      </div>

      <!-- Content Grafik -->


      <div class="row">
          <div class="col-xl-6 col-lg-7">
              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-center">Panik Button</h6>
                  </div>
                  <div class="card-body">
                      <div class="chart-bar">
                          <canvas id="myChart">
                              <?php
                                //Inisialisasi nilai variabel awal
                                $kategori = "";
                                $jumlah = null;
                                foreach ($hasil as $item) {
                                    $kategorii = $item->kategori;
                                    $nama_kategori .= "'$kategorii'" . ", ";
                                    $kategoriii = $item->total;
                                    $jumlah .= "$kategoriii" . ", ";
                                }
                                ?>
                          </canvas>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Donut Chart -->
          <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-center">Total Request User (Imei)</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-pie pt-4 pb-2">
                          <canvas id="donat"></canvas>
                      </div>
                      <div class="mt-4 text-center small">
                          <span class="mr-2">
                              <i class="fas fa-circle text-primary"></i> Direct
                          </span>
                          <span class="mr-2">
                              <i class="fas fa-circle text-success"></i> Social
                          </span>
                          <span class="mr-2">
                              <i class="fas fa-circle text-info"></i> Referral
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div class="row">
          <div class="col-xl-6 col-lg-7">
              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-center">Total Request Time</h6>
                  </div>
                  <div class="card-body">
                      <div class="chart-bar">
                          <canvas id="myBarChart"></canvas>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Donut Chart -->
          <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                  <!-- Card Body -->
                  <div class="card-body">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.062807002249!2d112.71178381420643!3d-7.458304275578898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e170bf8f8335%3A0xcc19817a9c23f3af!2sDiskominfo%20Kabupaten%20Sidoarjo!5e0!3m2!1sen!2sid!4v1639016017104!5m2!1sen!2sid"
                          width="485" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End of Main Content -->


  <script>
var ctx = document.getElementById('donat').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',
    // The data for our dataset
    data: {
        labels: [<?php echo $nama_kategori; ?>],
        datasets: [{
            label: 'Data Laporan Panik Menu ',
            backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)',
                'rgb(175, 238, 239)'
            ],
            borderColor: ['rgb(255, 99, 132)'],
            data: [<?php echo $jumlah; ?>]
        }]
    },
    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
  </script>