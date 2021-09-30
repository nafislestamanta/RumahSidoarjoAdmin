 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="fas fa-video"></i><b style="padding-left:5px">BERITA DAN INFORMASI</b></h5>
     </div>


     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a class="btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 15;">
                 <?php if ($title == "Berita") : ?>
                 Berita
                 <?php elseif ($title == "Informasi") : ?>
                 Informasi
                 <?php elseif ($title == "Pengumuman") : ?>
                 Pengumuman
                 <?php else : ?>
                 Kategori
                 <?php endif; ?>
             </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                 <a class="dropdown-item" href="<?= base_url('BeritaInformasi'); ?>">Semua</a>
                 <a class="dropdown-item" href="<?= base_url('BeritaInformasi/tampilberita'); ?>">Berita</a>
                 <a class="dropdown-item" href="<?= base_url('BeritaInformasi/tampilinformasi'); ?>">Informasi</a>
                 <a class="dropdown-item" href="<?= base_url('BeritaInformasi/tampilpengumuman'); ?>">Pengumuman</a>



                 <!-- <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php if ($title == "Semua") : ?>
                     Semua
                     <?php elseif ($title == "Berita") : ?>
                     Berita
                     <?php elseif ($title == "Informasi") : ?>
                     Informasi
                     <?php elseif ($title == "Pengumuman") : ?>
                     Informasi
                     <?php endif; ?>
                 </a> -->



             </div>
             <a href="" class="btn-sm btn-primary"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>

             <a href="<?= base_url('BeritaInformasi/tambah'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                     style="padding-right: 8px;"></i>Postingan</a>
         </div>


         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>Kode</th>
                                 <th>Kategori</th>
                                 <th>Judul</th>
                                 <th>Tanggal Publish</th>
                                 <th>Deskripsi</th>
                                 <th>Gambar</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php if ($title == "berita") :
                                foreach ($tampil as $a) : ?>
                         <tr>
                             <td><?= $a->kode ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->judul, 2); ?></td>
                             <td><?= $a->tanggal_publish ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><?= $a->gambar ?></td>
                             <td><a href="<?= base_url('BeritaInformasi/editberita' . $a->kode); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/detailberita/' . $a->kode); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/delete/' . $a->kode); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                         </tr>
                         <?php endforeach; ?>

                         <?php elseif ($title == "informasi") :
                                foreach ($tampil as $a) : ?>
                         <tr>
                             <td><?= $a->kode ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->judul, 2); ?></td>
                             <td><?= $a->tanggal_publish ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><?= $a->gambar ?></td>
                             <td><a href="<?= base_url('BeritaInformasi/editberita' . $a->kode); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/detailberita/' . $a->kode); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/delete/' . $a->kode); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                         </tr>
                         <?php endforeach; ?>

                         <?php elseif ($title == "pengumuman") :
                                foreach ($tampil as $a) : ?>
                         <tr>
                             <td><?= $a->kode ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->judul, 2); ?></td>
                             <td><?= $a->tanggal_publish ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><?= $a->gambar ?></td>
                             <td><a href="<?= base_url('BeritaInformasi/editberita' . $a->kode); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/detailberita/' . $a->kode); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/delete/' . $a->kode); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                         </tr>
                         <?php endforeach; ?>

                         <?php else :
                                foreach ($tampil as $a) : ?>
                         <tr>
                             <td><?= $a->kode ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->judul, 2); ?></td>
                             <td><?= $a->tanggal_publish ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><?= $a->gambar ?></td>
                             <td><a href="<?= base_url('BeritaInformasi/editberita/' . $a->kode); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                 <a style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/detailberita/' . $a->kode); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/delete/' . $a->kode); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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