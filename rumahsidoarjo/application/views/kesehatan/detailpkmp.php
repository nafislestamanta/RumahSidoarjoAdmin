<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail PKM Pembantu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $pkmp->id_kesehatan; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Puskesmas</td>
                            <td><?= $pkmp->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $pkmp->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Pengelola</td>
                            <td><?= $pkmp->kepemilikan; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $pkmp->no_telepon; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?= $pkmp->fax; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $pkmp->email; ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?= $pkmp->website; ?></td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td><?= $pkmp->penanggung_jawab; ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><img src="<?= base_url('./assets/img/' . $pkmp->foto); ?>" alt=""></td>
                        </tr>
                        <tr>
                            <td>Langitude</td>
                            <td><?= $pkmp->lang; ?></td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td><?= $pkmp->long; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Kesehatan'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->