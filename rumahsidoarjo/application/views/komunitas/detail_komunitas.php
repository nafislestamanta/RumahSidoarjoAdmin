<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Komunitas') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Komunitas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td class="font-weight-bold">ID Komunitas</td>
                            <td><?= $detail->id_komunitas; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Nama Komunitas</td>
                            <td><?= $detail->nama_komunitas; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Ketua / Penanggung Jawab Komunitas</td>
                            <td><?= $detail->ketua; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Alamat</td>
                            <td><?= $detail->alamat; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">No Telepon</td>
                            <td><?= $detail->no_tlp; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deskripsi</td>
                            <td><?= $detail->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Sosial Media</td>
                            <td><?= $detail->sosialmedia; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Foto 1</td>
                            <td><?= $detail->foto1; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Foto 2</td>
                            <td><?= $detail->foto2; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Foto 3</td>
                            <td><?= $detail->foto_profil; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Komunitas'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->