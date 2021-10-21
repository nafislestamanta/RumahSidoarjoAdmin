<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail PKM Utama</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $pkmu->id_kesehatan; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Rumah Sakit</td>
                            <td><?= $pkmu->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $pkmu->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Pengelola</td>
                            <td><?= $pkmu->kepemilikan; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $pkmu->no_telepon; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?= $pkmu->fax; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $pkmu->email; ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?= $pkmu->website; ?></td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td><?= $pkmu->penanggung_jawab; ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><img src="<?= base_url('./assets/img/' . $pkmu->foto); ?>" alt=""></td>
                        </tr>
                        <tr>
                            <td>Langitude</td>
                            <td><?= $pkmu->lat; ?></td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td><?= $pkmu->long; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Kesehatan/pkmutama'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->