<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pariwisata</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>ID Wisata</td>
                            <td><?= $edit->id_wisata; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $edit->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Wisata</td>
                            <td><?= $edit->nama_wisata; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $edit->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Pengelola</td>
                            <td><?= $edit->pengelola; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $edit->no_telepon; ?></td>
                        </tr>
                        <tr>
                            <td>Jam Wisata</td>
                            <td><?= $edit->jam_buka; ?> - <?= $edit->jam_tutup; ?></td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td><?= $edit->lat; ?></td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td><?= $edit->long; ?></td>
                        </tr>





                        <table class="table table-bordered" width="90%" cellspacing="0">
                            <thead>
                                <tr class="text-center"><b>
                                        <th>Gambar 1</th>
                                        <th>Gambar 2</th>
                                        <th>Gambar 3</th>
                                    </b>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <br>
                                            <img src="<?= base_url('assets/img/' . $edit->foto1); ?>" width="90px"
                                                alt="Belum Upload">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <br>
                                            <img src="<?= base_url('assets/img/' . $edit->foto2); ?>" width="90px"
                                                alt="Belum Upload">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <br>
                                            <img src="<?= base_url('assets/img/' . $edit->foto3); ?>" width="90px"
                                                alt="Belum Upload">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </thead>
                </table>
            </div>
        </div>
    </div>

    <?php if ($edit->kategori != 'kuliner') : ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Tarif Wisata</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <?php foreach ($tarif as $t) : ?>
                        <tr>
                            <td>Nama Tiket</td>
                            <td><?= $t->nama_tiket; ?></td>
                        </tr>
                        <tr>
                            <td>Tarif Wisata</td>
                            <td><?= $t->tarif; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
                <a href="<?= base_url('Pariwisata'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

    <?php else : ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Menu Kuliner</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <?php foreach ($kuliner as $t) : ?>
                        <tr>
                            <td>Nama Menu</td>
                            <td><?= $t->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Harga Menu</td>
                            <td><?= $t->harga; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
                <a href="<?= base_url('Pariwisata'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>

</div>
<!-- /.container-fluid -->