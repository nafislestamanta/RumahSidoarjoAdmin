 <div class="container-fluid">
     <div class="mb-4">
         <h6><i class="fas fa-home"></i><b> DASHBOARD KESEHATAN/b></h6>
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
                                 PKM-U
                             </div> <br>
                             <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                 <?php echo $pkmu->total ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-clinic-medical fa-4x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
                 <div class="btn bg-gradient-light text-center">
                     <a href="<?= base_url('Kesehatan/pkmutama'); ?>" aria-current="page" style="color:black">
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
                                 PKM-P
                             </div> <br>
                             <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                 <?php echo $pkmp->total ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-ambulance fa-4x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
                 <div class="btn bg-gradient-light text-center">
                     <a href="<?= base_url('Kesehatan'); ?>" aria-current="page" style="color:black"> Detail
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
                                 RS
                             </div> <br>
                             <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                 <?php echo $rs->total ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-hospital-alt fa-4x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
                 <div class="btn bg-gradient-light text-center">
                     <a href="<?= base_url('Kesehatan/rs'); ?>" aria-current="page" style="color:black">
                         Detail
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
                                 Laporan Panik
                             </div> <br>
                             <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                 <?php echo $rs->total ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-exclamation-triangle fa-4x text-gray-300"></i>
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

     </div>