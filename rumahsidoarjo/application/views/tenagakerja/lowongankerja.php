 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="far fa-building"></i><b style="padding-left:5px">Lowongan Kerja</b></h5>
     </div>
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a href="" class="btn-sm btn-primary"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>

             <a href="<?= base_url('LowonganKerja/tambah_lowongan'); ?>" class="btn-sm btn-primary"><i
                     class="fas fa-plus" style="padding-right: 8px;"></i>Lowongan</a>
         </div>
         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>ID</th>
                                 <th>Judul Lowongan</th>
                                 <th>Nama Perusahaan</th>
                                 <th>Kepemilikan</th>
                                 <th>No Telepon</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php if ($title == "Lowongan Kerja") :
                                foreach ($tampil as $s) : ?>
                         <tr class="text-center">
                             <td><?= $s->id_lowongan ?></td>
                             <td><?= word_limiter($s->judul_lowongan, 3); ?></td>
                             <td><?= word_limiter($s->nama_perusahaan, 3); ?></td>
                             <td><?= $s->kepemilikan ?></td>
                             <td><?= $s->no_tlp ?></td>
                             <td><a href="<?= base_url('LowonganKerja/editperusahaan/' . $s->id_lowongan); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('LowonganKerja/detail_lowongan/' . $s->id_lowongan); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('LowonganKerja/delete_lowongan/' . $s->id_lowongan); ?>"
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