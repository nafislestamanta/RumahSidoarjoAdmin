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
                                <td class="font-weight-bold">Lat</td>
                                <td><?= $detail->lat; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Long</td>
                                <td><?= $detail->long; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">website</td>
                                <td><?= $detail->website; ?></td>
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
                                <td>Gambar</td>
                                <td>
                                    <img width="150px" height="150px" src="<?= base_url('assets/img/' . $detail->foto); ?>" alt="Belum Ada Foto">
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <a href="<?= base_url('LowonganKerja'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->