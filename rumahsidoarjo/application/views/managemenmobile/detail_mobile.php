<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail User Mobile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>NIK</td>
                            <td><?= $user->NIK ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?= $user->nama ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $user->alamat ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $user->email ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?= $user->tanggal_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?= $user->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $user->no_telepon ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?= $user->password ?></td>
                        </tr>
                        <!-- <tr>
                            <td>Foto KTP</td>
                            <td><img src="<?= base_url('./assets/img/' . $user->foto_ktp); ?>" width="95px"></td>
                        </tr> -->
                        <tr>
                            <td>Foto Profil</td>
                            <td><img src="<?= base_url('./assets/img/' . $user->foto_profil); ?>" width="95px"></td>
                        </tr>
                        <!-- <tr>
                            <td>Selfie KTP</td>
                            <td><img src="<?= base_url('./assets/img/' . $user->selfie_ktp); ?>" width="95px"></td>
                        </tr> -->
                    </thead>
                </table>
                <a href="<?= base_url('ManagemenMobile') ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

</div>