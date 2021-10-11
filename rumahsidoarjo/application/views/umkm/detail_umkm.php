<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Umkm') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail UMKM</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td><?= $detail->id_umkm; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $detail->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?= $detail->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $detail->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td><?= $detail->penanggung_jawab; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><?= $detail->foto1; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><?= $detail->foto2; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><?= $detail->foto3; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $detail->no_telp; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $detail->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?= $detail->website; ?></td>
                        </tr>
                        <tr>
                            <td>Lat</td>
                            <td><?= $detail->lat; ?></td>
                        </tr>
                        <tr>
                            <td>Long</td>
                            <td><?= $detail->long; ?></td>
                        </tr>

                    </thead>
                </table>
                <a href="<?= base_url('Umkm'); ?>" class="btn-sm btn-danger">Kembali</a>
            </div>
        </div>

        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->