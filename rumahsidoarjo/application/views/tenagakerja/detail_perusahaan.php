<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Perusahaan') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Perusahaan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td class="font-weight-bold">ID</td>
                            <td><?= $detail->id; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Nama Perusahaan</td>
                            <td><?= $detail->nama_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Kepemilikan</td>
                            <td><?= $detail->kepemilikan; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Alamat</td>
                            <td><?= $detail->alamat; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">No Telepon</td>
                            <td><?= $detail->no_tlp; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Email</td>
                            <td><?= $detail->email; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Penanggung Jawab</td>
                            <td><?= $detail->penanggung_jawab; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deskripsi</td>
                            <td><?= $detail->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Foto</td>
                            <td><?= $detail->foto; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('LowonganKerja'); ?>" class="btn-sm btn-danger">Kembali</a>
            </div>
        </div>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->