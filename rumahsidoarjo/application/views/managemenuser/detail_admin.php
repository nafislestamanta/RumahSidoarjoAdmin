<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>NIP</td>
                            <td><?= $detail->nip; ?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?= $detail->username; ?></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td><?= $detail->nama_role; ?></td>
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
                            <td>No Telepon</td>
                            <td><?= $detail->no_tlp; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $detail->email; ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><img width="200" height="200" src="<?= base_url('./assets/img/' . $detail->foto); ?>" alt=""></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?= $detail->password; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Admin'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->