<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Riwayat Bencana</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td class="font-weight-bold">Kode</td>
                            <td><?= $detail->id_laporan; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Kategori</td>
                            <td><?= $detail->kategori; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Nama Pelopor</td>
                            <td><?= $detail->nama; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Lokasi Kejadian</td>
                            <td><?= $detail->lokasi_kejadian; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Waktu Kejadian</td>
                            <td><?= $detail->waktu_kejadian; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Bukti Kejadian</td>
                            <td><img width="150px" height="150px"
                                    src="<?= base_url('assets/img/' . $detail->bukti_kejadian); ?>" alt=""></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deskripsi</td>
                            <td><?= $detail->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Petugas</td>
                            <td><?= $detail->petugas; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Status</td>
                            <td><?= $detail->status; ?></td>
                        </tr>
                    </thead>
                </table>
            </div>
            <a class="btn-sm btn-warning" href="<?= base_url('Bpbd/riwayat'); ?>" role="button">kembali</a>

        </div>
    </div>



</div>