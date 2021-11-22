<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Kantor Polisi') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Kantor Polisi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $detail->id_kantor_polisi; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Kantor Polisi</td>
                            <td><?= $detail->nama_kantor_polisi; ?></td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td><?= $detail->penanggungjawab; ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td><?= $detail->kecamatan; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $detail->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td><?= $detail->no_tlp; ?></td>
                        </tr>
                    </thead>
                </table>
                <a href="<?= base_url('Polisi/tampil_kantor'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>

        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->