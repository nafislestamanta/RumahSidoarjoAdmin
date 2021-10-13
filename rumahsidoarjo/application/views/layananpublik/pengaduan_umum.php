 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="fas fa-cogs"></i><b style="padding-left:5px">PENGADUAN UMUM</b></h5>
     </div>


     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a class="btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 15;">
                 <?php if ($title == "Pelayanan") : ?>
                 Pelayanan
                 <?php elseif ($title == "Fasilitas Publik") : ?>
                 Fasilitas Publik
                 <?php elseif ($title == "Kesehatan") : ?>
                 Kesehatan
                 <?php else : ?>
                 Kategori
                 <?php endif; ?>
             </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                 <a class="dropdown-item" href="<?= base_url('LayananPublik/pengaduan'); ?>">Semua</a>
                 <a class="dropdown-item" href="<?= base_url('LayananPublik/tampil_pelayanan'); ?>">Pelayanan</a>
                 <a class="dropdown-item" href="<?= base_url('LayananPublik/tampil_fasilitas_publik'); ?>">Fasilitas
                     Publik</a>
                 <a class="dropdown-item" href="<?= base_url('LayananPublik/tampil_kesehatan'); ?>">Kesehatan</a>


             </div>
             <a href="" class="btn-sm btn-primary"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
         </div>


         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>ID</th>
                                 <th>Pelapor</th>
                                 <th>Kategori</th>
                                 <th>Lokasi Kejadian</th>
                                 <th>Waktu Kejadian</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php if ($title == "Pelayanan") :
                                foreach ($tampil as $a) : ?>
                         <tr class="text-center">
                             <td><?= $a->id_pengaduan ?></td>
                             <td><?= $a->nama ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->lokasi_kejadian, 3); ?></td>
                             <td><?= $a->waktu_kejadian ?></td>
                             <td><?= $a->status_pengaduan ?></td>
                             <td><a href="<?= base_url('LayananPublik/edit_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                 </a>
                                 <!-- <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/detail_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i>
                                 </a> -->
                                 <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/delete_pengaduan/'  . $a->id_pengaduan); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                 </a>
                             </td>
                         </tr>
                         <?php endforeach; ?>

                         <?php elseif ($title == "Fasilitas Publik") :
                                foreach ($tampil as $a) : ?>
                         <tr class="text-center">
                             <td><?= $a->id_pengaduan ?></td>
                             <td><?= $a->nama ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->lokasi_kejadian, 3); ?></td>
                             <td><?= $a->waktu_kejadian ?></td>
                             <td><?= $a->status_pengaduan ?></td>
                             <td><a href="<?= base_url('LayananPublik/edit_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                 </a>
                                 <!-- <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/detail_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i>
                                 </a> -->
                                 <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/delete_pengaduan/'  . $a->id_pengaduan); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                 </a>
                             </td>
                         </tr>
                         <?php endforeach; ?>

                         <?php elseif ($title == "Kesehatan") :
                                foreach ($tampil as $a) : ?>
                         <tr class="text-center">
                             <td><?= $a->id_pengaduan ?></td>
                             <td><?= $a->nama ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->lokasi_kejadian, 3); ?></td>
                             <td><?= $a->waktu_kejadian ?></td>
                             <td><?= $a->status_pengaduan ?></td>
                             <td><a href="<?= base_url('LayananPublik/edit_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                 </a>
                                 <!-- <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/detail_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i>
                                 </a> -->
                                 <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/delete_pengaduan/'  . $a->id_pengaduan); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                 </a>
                             </td>
                         </tr>
                         <?php endforeach; ?>

                         <?php elseif ($title == "Pengaduan") :
                                foreach ($tampil as $a) : ?>
                         <tr class="text-center">
                             <td><?= $a->id_pengaduan ?></td>
                             <td><?= $a->nama ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->lokasi_kejadian, 3); ?></td>
                             <td><?= $a->waktu_kejadian ?></td>
                             <td><?= $a->status_pengaduan ?></td>
                             <td><a href="<?= base_url('LayananPublik/edit_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                 </a>
                                 <!-- <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/detail_pengaduan/' . $a->id_pengaduan); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i>
                                 </a> -->
                                 <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/delete_pengaduan/' . $a->id_pengaduan); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                 </a>
                             </td>
                         </tr>
                         <?php endforeach; ?>
                         <?php endif; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>