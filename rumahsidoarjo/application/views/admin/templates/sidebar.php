 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center">
         <div class="sidebar-brand-icon"> <br>

             <?php $role = $this->session->userdata('id_role');
                $nama_role = "SELECT * FROM `rule_admin` WHERE id_role = $role";
                $nama = $this->db->query($nama_role)->row(); ?>

             <img class="img-profile rounded-circle" style="padding-top: px;"
                 src="<?= base_url('assets'); ?>/img/sidoarjo.PNG" widht="60" height="60">
             <br>
             <div class="sidebar-brand-text mr-2 d-lg-inline text-gray-light small"><?= $nama->nama_role ?></div>

         </div>
     </a>
     <br>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <?php $role = $this->session->userdata('id_role');
        //role 1 = super admin
        if ($role == 1) : ?>
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
                 <a class="collapse-item" href="<?= base_url('PanikMenu/konfirmasi'); ?>">Konfirmasi Panik</a>

             </div>
         </div>
     </li>

     <!-- Pengaduan Umum -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('LayananPublik/pengaduan'); ?>">
             <i class="fas fa-file-import"></i>
             <span>PENGADUAN</span></a>
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
                 <a class="collapse-item" href="<?= base_url('Kesehatan/pkmutama'); ?>">PKM Utama</a>
                 <a class="collapse-item" href="<?= base_url('Kesehatan'); ?>">PKM Pembantu</a>
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

     <!-- Lowongan Kerja  -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
             aria-controls="collapse4">
             <i class="fas fa-user-tie"></i>
             <span>LOWONGAN KERJA</span>
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
                 <a class="collapse-item" href="<?= base_url('Dishub'); ?>">Cctv</a>
             </div>
         </div>
     </li>

     <!-- Layanan Publik -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse12" aria-expanded="true"
             aria-controls="collapse12">
             <i class="fas fa-cogs"></i>
             <span>LAYANAN PUBLIK</span>
         </a>
         <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <!-- <a class="collapse-item" href="<?= base_url('LayananPublik/pengaduan'); ?>">Pengaduan Umum</a> -->
                 <a class="collapse-item" href="<?= base_url('LayananPublik'); ?>">Informasi Umum</a>
                 <a class="collapse-item" href="<?= base_url('LayananPublik/kategori'); ?>">Kategori Informasi</a>
             </div>
         </div>
     </li>


     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse18" aria-expanded="true"
             aria-controls="collapse18">
             <i class="fas fa-users"></i>
             <span>KOMUNITAS</span>
         </a>
         <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= base_url('Komunitas'); ?>">Komunitas</a>
                 <a class="collapse-item" href="<?= base_url('Komunitas/event'); ?>">Event</a>
             </div>
         </div>
     </li>

     <!-- Event-->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('Event'); ?>">
             <i class="fas fa-theater-masks"></i>
             <span>EVENT</span></a>
     </li>

     <!-- UMKM-->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('Umkm'); ?>">
             <i class="fas fa-hand-holding-usd"></i>
             <span>UMKM</span></a>
     </li>

     <!-- role 2 = Dishub -->
     <?php elseif ($role == 2) : {
            }; ?>
     <div class="sidebar-heading">
         Admin Dishub
     </div>

     <!-- <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
     </li> -->
     <!-- DISHUB  -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
             aria-controls="collapse7">
             <i class="fas fa-road"></i>
             <span>DISHUB</span>
         </a>
         <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= base_url('Dishub'); ?>">Cctv</a>
             </div>
         </div>
     </li>

     <?php elseif ($role == 3) : {
            }; ?>
     <div class="sidebar-heading">
         Admin UMKM
     </div>
     <!-- Home-->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Umkm/dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('Umkm'); ?>">
             <i class="fas fa-hand-holding-usd"></i>
             <span>UMKM</span></a>
     </li>


     <?php elseif ($role == 4) : {
            }; ?>
     <div class="sidebar-heading">
         Admin Lowongan Kerja
     </div>
     <!-- Home-->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('LowonganKerja/dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
             aria-controls="collapse4">
             <i class="fas fa-user-tie"></i>
             <span>LOWONGAN KERJA</span>
         </a>
         <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('LowonganKerja'); ?>">Perusahaan</a>
                 <a class="collapse-item" href="<?= base_url('LowonganKerja/lowongan'); ?>">Lowongan Kerja</a>
             </div>
         </div>
     </li>

     <?php elseif ($role == 5) : {
            }; ?>
     <div class="sidebar-heading">
         Admin Pendidikan
     </div>
     <!-- Home-->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Pendidikan/dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
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

     <?php elseif ($role == 6) : {
            }; ?>
     <div class="sidebar-heading">
         Admin Kesehatan
     </div>
     <!-- Home-->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Kesehatan/dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
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
                 <a class="collapse-item" href="<?= base_url('Kesehatan/pkmutama'); ?>">PKM Utama</a>
                 <a class="collapse-item" href="<?= base_url('Kesehatan'); ?>">PKM Pembantu</a>
                 <a class="collapse-item" href="<?= base_url('Kesehatan/rs'); ?>">Rumah Sakit</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true"
             aria-controls="collapse9">
             <i class="fas fa-radiation"></i>
             <span>LAPORAN PANIK</span>
         </a>
         <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Kesehatan/laporan'); ?>">Sedang Proses</a>
                 <a class="collapse-item" href="<?= base_url('Kesehatan/riwayat'); ?>">Riwayat</a>
             </div>
         </div>
     </li>

     <?php elseif ($role == 7) : {
            }; ?>
     <div class="sidebar-heading">
         Admin Pariwisata
     </div>
     <!-- Home-->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Pariwisata/dashboard'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
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
             </div>
         </div>
     </li>

     <?php elseif ($role == 8) : {
            }; ?>
     <div class="sidebar-heading">
         Admin Polisi
     </div>

     <!-- Panik Menu -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Polisi'); ?>">
             <i class="fas fa-home"></i>
             <span>HOME</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
             aria-controls="collapse1">
             <i class="fas fa-radiation"></i>
             <span>PANIK MENU</span>
         </a>
         <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">feature:</h6>
                 <a class="collapse-item" href="<?= base_url('Polisi/tampil_kantor'); ?>">Data Kantor</a>
                 <a class="collapse-item" href="<?= base_url('Polisi/laporan'); ?>">Laporan Panik</a>
                 <a class="collapse-item" href="<?= base_url('Polisi/riwayat'); ?>">Riwayat</a>
             </div>
         </div>
     </li>

     <?php elseif ($role == 9) : {
            }; ?>
     <div class="sidebar-heading">
         Admin BPDB
     </div>

     <!-- Panik Menu -->

     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Bpbd'); ?>">
             <i class="fas fa-home"></i>
             <span>KANTOR</span></a>
     </li>
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Bpbd/laporan'); ?>">
             <i class="fas fa-home"></i>
             <span>PENGADUAN</span></a>
     </li>
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('Bpbd/riwayat'); ?>">
             <i class="fas fa-home"></i>
             <span>RWIAYAT </span></a>
     </li>

     <?php endif; ?>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Sidebar -->