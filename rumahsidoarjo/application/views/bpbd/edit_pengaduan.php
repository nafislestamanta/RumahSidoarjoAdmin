   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-3">
           <h5><i class="fas fa-cogs"></i></i><b style="padding-left:5px">Update Pengaduan Bencana</b></h5>
       </div>

       <!-- Main content Ini Bagian Content -->
       <section class="content">
           <div class="card card-primary">
               <form action="<?php echo base_url('Bpbd/updatepengaduan/' . $edit->id_laporan); ?> " method="POST"
                   enctype="multipart/form-data">

                   <div class="table-responsive">
                       <table class="table table-bordered" width="100%" cellspacing="0">
                           <thead>
                               <tr>
                                   <td class="font-weight-bold">ID Laporan</td>
                                   <td><?= $edit->id_laporan; ?></td>
                               </tr>

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
                                   <td class="font-weight-bold">Bukti Kejadian</td>
                                   <td><?= $edit->bukti_kejadian; ?></td>
                               </tr>

                               <tr>
                                   <td class="font-weight-bold">Deskripsi</td>
                                   <td><?= $edit->deskripsi; ?></td>
                               </tr>

                               <tr>
                                   <td class="font-weight-bold">Status Pengaduan</td>
                                   <td>
                                       <select class="form-control" name="status" id="status">
                                           <option value="Proses"
                                               <?php if ($edit->status == 'Proses') echo 'selected'; ?>>
                                               Proses
                                           </option>
                                           <option value="Selesai"
                                               <?php if ($edit->status == 'Selesai') echo 'selected'; ?>>
                                               Selesai
                                           </option>
                                           <option value="Tolak"
                                               <?php if ($edit->status == 'Tolak') echo 'selected'; ?>>
                                               Tolak
                                           </option>
                                       </select>
                                   </td>
                               </tr>
                           </thead>
                       </table>
                       <button type="submit" class="btn btn-primary">Update</button>
                       <a class="btn btn-warning" href="<?= base_url('Bpbd/laporan'); ?>" role="button">kembali</a>
                   </div>
               </form>
           </div>
       </section>
   </div>