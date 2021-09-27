 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
             <img class="img-profile rounded-circle" src="<?= base_url('assets'); ?>/img/admin1.jpg" widht="40"
                 height="62">
         </div>
         <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Home-->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
     </li>

     <!-- Panik Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
             aria-controls="collapse1">
             <i class="fas fa-radiation"></i>
             <span>PANIK MENU</span>
         </a>
         <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('PanikMenu'); ?>">Managemen Data</a>
                 <a class="collapse-item" href="<?= base_url('PanikMenu/laporanpanik'); ?>">Laporan Panik</a>

             </div>
         </div>
     </li>

     <!-- Berita dan Informasi -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('BeritaInformasi'); ?>">
             <i class="fas fa-info-circle"></i>
             <span>BERITA & INFORMASI</span></a>
     </li>

     <!-- Managemen User -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
             aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-user-cog"></i>
             <span>MANAGEMEN USER</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Admin'); ?>">Managemen Admin</a>
                 <a class="collapse-item" href="<?= base_url(''); ?>">Kepegawaian</a>
             </div>
         </div>
     </li>

     <!-- Managemen Mobile  -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
             aria-controls="collapse6">
             <i class="fas fa-mobile-alt"></i>
             <span>MANAGEMEN MOBILE</span>
         </a>
         <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('ManagemenMobile'); ?>">User Mobile</a>
                 <a class="collapse-item" href="<?= base_url('ManagemenMobile/validasi'); ?>">Validasi Akun</a>
             </div>
         </div>
     </li>

     <!-- Pariwisata -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
             aria-controls="collapse4">
             <i class="fas fa-umbrella-beach"></i>
             <span>PARIWISATA</span>
         </a>
         <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Pariwisata'); ?>">Tempat Wisata</a>
                 <a class="collapse-item" href="<?= base_url('Pariwisata/kategoriwisata'); ?>">Kategori Wisata</a>
                 <a class="collapse-item" href="<?= base_url('Pariwisata/event'); ?>">Event</a>
             </div>
         </div>
     </li>

     <!-- Kesehatan  -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true"
             aria-controls="collapse8">
             <i class="fas fa-user-md"></i>
             <span>KESEHATAN</span>
         </a>
         <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Kesehatan/pkmutama'); ?>">Pkm Utama</a>
                 <a class="collapse-item" href="<?= base_url('Kesehatan'); ?>">Pkm Pembantu</a>
                 <a class="collapse-item" href="<?= base_url('Kesehatan/rs'); ?>">Rumah Sakit</a>
             </div>
         </div>
     </li>

     <!-- Pendidikan   -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true"
             aria-controls="collapse9">
             <i class="fas fa-graduation-cap"></i>
             <span>PENDIDIKAN</span>
         </a>
         <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Pendidikan'); ?>">SD</a>
                 <a class="collapse-item" href="<?= base_url('Pendidikan/Slb'); ?>">SLB</a>
                 <a class="collapse-item" href="<?= base_url('Pendidikan/Smp'); ?>">SMP</a>
             </div>
         </div>
     </li>

     <!-- Tenaga Kerja  -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
             aria-controls="collapse4">
             <i class="fas fa-user-tie"></i>
             <span>Lowongan Kerja</span>
         </a>
         <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('LowonganKerja'); ?>">Perusahaan</a>
                 <a class="collapse-item" href="<?= base_url('LowonganKerja/lowongan'); ?>">Lowongan Kerja</a>
             </div>
         </div>
     </li>


     <!-- DISHUB  -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
             aria-controls="collapse7">
             <i class="fas fa-road"></i>
             <span>DISHUB</span>
         </a>
         <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Dishub'); ?>">Cctv</a>
             </div>
         </div>
     </li>





     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Sidebar -->