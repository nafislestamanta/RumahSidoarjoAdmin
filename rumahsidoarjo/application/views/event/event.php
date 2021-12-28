 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="fas fa-theater-masks"></i><b style="padding-left:5px">EVENT</b></h5>
     </div>


     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a class="btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 15;">
                 <?php if ($title == "Agenda Kota") : ?>
                 Agenda Kota
                 <?php elseif ($title == "Lomba Dan Budaya") : ?>
                 Lomba Dan Budaya
                 <?php else : ?>
                 Kategori
                 <?php endif; ?>
             </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                 <a class="dropdown-item" href="<?= base_url('Event'); ?>">Semua</a>
                 <a class="dropdown-item" href="<?= base_url('Event/tampilagenda'); ?>">Agenda Kota</a>
                 <a class="dropdown-item" href="<?= base_url('Event/tampillombadanbudaya'); ?>">Lomba Dan Budaya</a>





             </div>
             <a href="" class="btn-sm btn-primary"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>

             <a href="<?= base_url('Event/tambah_event'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                     style="padding-right: 8px;"></i>Event</a>
         </div>


         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>No</th>
                                 <th>Kategori</th>
                                 <th>Nama Event</th>
                                 <th>Tanggal Publish</th>
                                 <th>Deskripsi</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php $no = 1;
                            if ($title == "agenda kota") :
                                foreach ($tampil as $a) : ?>
                         <tr>
                             <td><?= $no++ ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->nama_event, 2); ?></td>
                             <td><?= $a->tgl_posting ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><a href="<?= base_url('BeritaInformasi/editberita' . $a->id_event); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/detailberita/' . $a->id_event); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/delete/' . $a->id_event); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                         </tr>
                         <?php endforeach; ?>


                         <?php elseif ($title == "lomba dan budaya") :
                                foreach ($tampil as $a) : ?>

                         <tr>
                             <td><?= $a->id_event ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->nama_event, 2); ?></td>
                             <td><?= $a->tgl_posting ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><a href="<?= base_url('BeritaInformasi/editberita' . $a->id_event); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/detailberita/' . $a->id_event); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('BeritaInformasi/delete/' . $a->id_event); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                         </tr>
                         <?php endforeach; ?>

                         <?php elseif ($title == "Event") :
                                foreach ($tampil as $a) : ?>

                         <tr>
                             <td><?= $a->id_event ?></td>
                             <td><?= $a->kategori ?></td>
                             <td><?= word_limiter($a->nama_event, 2); ?></td>
                             <td><?= $a->tgl_posting ?></td>
                             <td><?= word_limiter($a->deskripsi, 3); ?></td>
                             <td><a href="<?= base_url('Event/edit_event/' . $a->id_event); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('Event/detail_event/' . $a->id_event); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;" href="<?= base_url('Event/delete/' . $a->id_event); ?>"
                                     onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                     class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                         </tr>
                         <?php endforeach; ?>


                         <?php endif; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>