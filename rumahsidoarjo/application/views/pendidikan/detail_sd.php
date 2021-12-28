<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Nama Sekolah</td>
                            <td><?= $tampil->nama_sekolah; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $tampil->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td><?= $tampil->kecamatan; ?></td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td><?= $tampil->nama; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $tampil->no_telepon; ?></td>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <td><?= $tampil->akreditasi; ?></td>
                        </tr>
                        <tr>
                            <td>NPSN</td>
                            <td><?= $tampil->NPSN; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= $tampil->status; ?></td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td><?= $tampil->lat; ?></td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td><?= $tampil->long; ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?= $tampil->website; ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><img width="150px" height="150px" src="<?= base_url('assets/img/' . $tampil->foto); ?>"
                                    alt="Belum Ada Foto"></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Fasilitas Sekolah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <?php $no = 1;
                        foreach ($fasilitas as $f) : ?>
                        <tr>
                            <td><?= $no++ ?> </td>
                            <td><?= $f->nama; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
                <!-- <?php if ($title == "Sekolah Luar Biasa") : ?>
                <a href="<?= base_url('Pendidikan/slb'); ?>" class="btn btn-danger">Kembali</a>
                <?php else : ?>
                <a href="<?= base_url('Pendidikan/slb'); ?>" class="btn btn-danger">Kembali</a>
                <?php endif; ?> -->
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Ekstrakulikuler Sekolah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <?php $no = 1;
                        foreach ($ekskul as $e) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            S <td><?= $e->nama; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
                <!-- <?php if ($title == "Sekolah Luar Biasa") : ?>
                <a href="<?= base_url('Pendidikan/slb'); ?>" class="btn btn-danger">Kembali</a>
                <?php else : ?>
                <a href="<?= base_url('Pendidikan/slb'); ?>" class="btn btn-danger">Kembali</a>
                <?php endif; ?> -->


            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->