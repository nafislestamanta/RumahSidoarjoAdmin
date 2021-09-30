<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Berita') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $detail->kode; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $detail->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><?= $detail->judul; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Publish</td>
                            <td><?= $detail->tanggal_publish; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $detail->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><?= $detail->gambar; ?></td>
                        </tr>
                        <tr>
                            <td>Link</td>
                            <td><?= $detail->link; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('BeritaInformasi'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <?php elseif ($title == 'Detail Informasi') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Informasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $detail1->kode; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $detail1->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><?= $detail1->judul; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Publish</td>
                            <td><?= $detail1->tanggal_publish; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $detail1->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><?= $detail1->gambar; ?></td>
                        </tr>
                        <tr>
                            <td>Link</td>
                            <td><?= $detail1->link; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('BeritaInformasi'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <?php elseif ($title == 'Detail Pengumuman') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pengumuman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $detail2->kode; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $detail2->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><?= $detail2->judul; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Publish</td>
                            <td><?= $detail2->tanggal_publish; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $detail2->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><?= $detail2->gambar; ?></td>
                        </tr>
                        <tr>
                            <td>Link</td>
                            <td><?= $detail2->link; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('BeritaInformasi'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->