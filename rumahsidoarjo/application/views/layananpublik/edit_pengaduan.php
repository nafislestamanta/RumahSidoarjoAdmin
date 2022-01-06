   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-3">
           <h5><i class="fas fa-cogs"></i></i><b style="padding-left:5px">Update Status Pengaduan</b></h5>
       </div>

       <!-- Main content Ini Bagian Content -->
       <section class="content">
           <div class="col">
               <div class="card card-primary">
                   <form action="<?php echo base_url('LayananPublik/updatepengaduan/' . $edit->id_pengaduan); ?> " method="POST" enctype="multipart/form-data">
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" width="100%" cellspacing="0">
                                   <thead>

                                       <tr>
                                           <td class="font-weight-bold">NIK Pelapor</td>
                                           <td><?= $edit->NIK; ?></td>
                                       </tr>

                                       <tr>
                                           <td class="font-weight-bold">Nama Pelapor</td>
                                           <td><?= $edit->nama; ?></td>
                                       </tr>

                                       <tr>
                                           <td class="font-weight-bold">Kategori Pengaduan</td>
                                           <td><?= $edit->kategori; ?></td>
                                       </tr>

                                       <tr>
                                           <td class="font-weight-bold">Lokasi Kejadian</td>
                                           <td><?= $edit->lokasi_kejadian; ?></td>
                                       </tr>

                                       <tr>
                                           <td class="font-weight-bold">Waktu Kejadian</td>
                                           <td><?= $edit->waktu_kejadian; ?></td>
                                       </tr>

                                       <tr>
                                           <td class="font-weight-bold">Deskripsi</td>
                                           <td><?= $edit->deskripsi; ?></td>
                                       </tr>

                                       <tr>
                                           <td class="font-weight-bold">Gambar</td>
                                           <?php if ($edit->gambar) : ?>
                                               <td><img width="150px" height="150px" src="<?= base_url('assets/img/' . $edit->gambar); ?>" alt="Belum Ada Foto"></td>
                                           <?php else : ?>
                                               <td>Belum ada gambar</td>
                                           <?php endif; ?>

                                       </tr>

                                       <!-- <tr>
                                           <td class="font-weight-bold">Gambar</td>
                                           <td><?= $edit->gambar; ?></td>
                                       </tr> -->

                                       <tr>
                                           <td class="font-weight-bold">Status Pengaduan</td>
                                           <td>
                                               <select class="form-control" name="status_pengaduan" id="status_pengaduan">
                                                   <option value="Menunggu" <?php if ($edit->status_pengaduan == 'Menunggu') echo 'selected'; ?>>
                                                       Menunggu
                                                   </option>
                                                   <option value="Sedang Diproses" <?php if ($edit->status_pengaduan == 'Sedang Diproses') echo 'selected'; ?>>
                                                       Sedang
                                                       Diproses
                                                   </option>
                                                   <option value="Selesai" <?php if ($edit->status_pengaduan == 'Selesai') echo 'selected'; ?>>
                                                       Selesai
                                                   </option>
                                                   <option value="Ditolak" <?php if ($edit->status_pengaduan == 'Ditolak') echo 'selected'; ?>>
                                                       Ditolak
                                                   </option>
                                               </select>
                                           </td>
                                       </tr>
                                   </thead>
                               </table>
                               <button type="submit" class="btn btn-primary">Update</button>
                               <a class="btn btn-warning" href="<?= base_url('LayananPublik/pengaduan'); ?>" role="button">kembali</a>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </section>
   </div>