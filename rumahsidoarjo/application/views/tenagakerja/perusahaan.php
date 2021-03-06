 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <h5><i class="far fa-building"></i><b style="padding-left:5px">Perusahaan</b></h5>
     </div>
     <div class="card shadow mb-4">
         <div class="card-header py-3">

             <a href="<?= base_url('LowonganKerja/pdf_perusahaan'); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
             <a href="<?= base_url('LowonganKerja/tambah_perusahaan'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>Perusahaan</a>
         </div>
         <div class="card-body">
             <?= $this->session->flashdata('message'); ?>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center"><b>
                                 <th>No</th>
                                 <th>Nama Perusahaan</th>
                                 <th>Kepemilikan</th>
                                 <th>Alamat</th>
                                 <th>No Telepon</th>
                                 <th>Action</th>
                             </b>
                         </tr>
                     </thead>

                     <tbody>
                         <?php $no = 1;
                            if ($title == "Perusahaan") :
                                foreach ($tampil as $e) : ?>
                                 <tr class="text-center">
                                     <td><?= $no++ ?></td>
                                     <td><?= word_limiter($e->nama_perusahaan, 3); ?></td>
                                     <td><?= $e->kepemilikan ?></td>
                                     <td><?= word_limiter($e->alamat, 3); ?></td>
                                     <td><?= $e->no_tlp ?></td>
                                     <td><a href="<?= base_url('LowonganKerja/editperusahaan/' . $e->id); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a style="margin-left: 5px;" href="<?= base_url('LowonganKerja/detailperusahaan/' . $e->id); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a style="margin-left: 5px;" href="<?= base_url('LowonganKerja/delete/' . $e->id); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                 </tr>
                             <?php endforeach; ?>
                         <?php endif; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>