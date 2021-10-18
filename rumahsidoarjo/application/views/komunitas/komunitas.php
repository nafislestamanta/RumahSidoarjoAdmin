 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="fas fa-users"></i><b style="padding-left:5px">DAFTAR KOMUNITAS</b></h5>
     </div>
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a href="" class="btn-sm btn-primary"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>

             <a href="<?= base_url('Komunitas/tambah_komunitas'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                     style="padding-right: 8px;"></i>Komunitas</a>
         </div>
         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>ID</th>
                                 <th>Nama Komunitas</th>
                                 <th>Ketua Komunitas</th>
                                 <th>Alamat</th>
                                 <th>No Telepon</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php if ($title == "Komunitas") :
                                foreach ($tampil as $e) : ?>
                         <tr class="text-center">
                             <td><?= $e->id_komunitas ?></td>
                             <td><?= word_limiter($e->nama_komunitas, 3); ?></td>
                             <td><?= $e->ketua ?></td>
                             <td><?= word_limiter($e->alamat, 3); ?></td>
                             <td><?= $e->no_tlp ?></td>
                             <td><a href="<?= base_url('Komunitas/edit_komunitas/' . $e->id_komunitas); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('Komunitas/detail_komunitas/' . $e->id_komunitas); ?>"
                                     class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                     style="margin-left: 5px;"
                                     href="<?= base_url('Komunitas/delete/' . $e->id_komunitas); ?>"
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