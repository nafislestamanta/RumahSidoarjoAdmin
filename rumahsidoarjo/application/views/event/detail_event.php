<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Event') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $event->id_event; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $event->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Event</td>
                            <td><?= $event->nama_event; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Publish</td>
                            <td><?= $event->tgl_posting; ?></td>
                        </tr>
                        <tr>
                            <td>penyelenggara</td>
                            <td><?= $event->penyelenggara; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Kegiatan</td>
                            <td><?= $event->tempat_kegiatan; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $event->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Utama</td>
                            <td><?= $event->foto1; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Kedua</td>
                            <td><?= $event->foto2; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Ketiga</td>
                            <td><?= $event->foto3; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Event'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <?php elseif ($title == 'Detail Agenda Kota') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Agenda Kota</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $event->id_event; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $event->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Event</td>
                            <td><?= $event->nama_event; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Publish</td>
                            <td><?= $event->tgl_posting; ?></td>
                        </tr>
                        <tr>
                            <td>penyelenggara</td>
                            <td><?= $event->penyelenggara; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Kegiatan</td>
                            <td><?= $event->tempat_kegiatan; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $event->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Utama</td>
                            <td><?= $event->foto1; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Kedua</td>
                            <td><?= $event->foto2; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Ketiga</td>
                            <td><?= $event->foto3; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Event'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <?php elseif ($title == 'Detail Lomba Budaya') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Lomba Budaya</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $event->id_event; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $event->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Event</td>
                            <td><?= $event->nama_event; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Publish</td>
                            <td><?= $event->tgl_posting; ?></td>
                        </tr>
                        <tr>
                            <td>penyelenggara</td>
                            <td><?= $event->penyelenggara; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Kegiatan</td>
                            <td><?= $event->tempat_kegiatan; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $event->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Utama</td>
                            <td><?= $event->foto1; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Kedua</td>
                            <td><?= $event->foto2; ?></td>
                        </tr>
                        <tr>
                            <td>Foto Ketiga</td>
                            <td><?= $event->foto3; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Event'); ?>" class="btn-sm btn-danger">Kembali</a>
            </div>
        </div>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->