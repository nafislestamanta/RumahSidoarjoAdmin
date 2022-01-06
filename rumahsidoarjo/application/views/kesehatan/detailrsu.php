<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Rumah Sakit</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Nama Rumah Sakit</td>
                            <td><?= $rsu->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $rsu->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Pengelola</td>
                            <td><?= $rsu->kepemilikan; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $rsu->no_telepon; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?= $rsu->fax; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $rsu->email; ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?= $rsu->website; ?></td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td><?= $rsu->penanggung_jawab; ?></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><img width="150px" height="150px" src="<?= base_url('assets/img/' . $rsu->foto); ?>" alt="Belum Ada Foto"></td>
                        </tr>
                        <tr>
                            <td>Langitude</td>
                            <td><?= $rsu->lat; ?></td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td><?= $rsu->long; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Kesehatan/rs'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->