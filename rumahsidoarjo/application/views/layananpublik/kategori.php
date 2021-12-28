 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="fas fa-info"></i><b style="padding-left:5px">KATEGORI INFORMASI</b></h5>
     </div>
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a href="<?= base_url('LayananPublik/tambah_kategori'); ?>" class="btn-sm btn-primary"><i
                     class="fas fa-plus" style="padding-right: 8px;"></i>Kategori</a>
         </div>
         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>NO</th>
                                 <th>Nama Kategori</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php $no = 1;
                            if ($title == "Kategori") :
                                foreach ($tampil as $e) : ?>
                         <tr class="text-center">
                             <td><?= $no++ ?></td>
                             <td><?= $e->nama_kategori ?></td>
                             <td><a href="<?= base_url('LayananPublik/edit_kategori/' . $e->id_kategorilayanan); ?>"
                                     class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                 <a style="margin-left: 5px;"
                                     href="<?= base_url('LayananPublik/delete_kategori/' . $e->id_kategorilayanan); ?>"
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