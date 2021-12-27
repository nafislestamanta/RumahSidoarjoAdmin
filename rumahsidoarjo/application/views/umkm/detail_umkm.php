<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if ($title == 'Detail Umkm') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail UMKM</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">

                    <tr>
                        <td class="font-weight-bold text-dark">ID</td>
                        <td><?= $detail->id_umkm; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Kategori</td>
                        <td><?= $detail->kategori; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Nama</td>
                        <td><?= $detail->nama; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Alamat</td>
                        <td><?= $detail->alamat; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Penanggung Jawab</td>
                        <td><?= $detail->penanggung_jawab; ?></td>
                    </tr>

                    <tr>
                        <td class="font-weight-bold text-dark">No Telepon</td>
                        <td><?= $detail->no_telp; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Deskripsi</td>
                        <td><?= $detail->deskripsi; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Website</td>
                        <td><?= $detail->website; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Lat</td>
                        <td><?= $detail->lat; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark">Long</td>
                        <td><?= $detail->long; ?></td>
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
                                    <?= $this->session->flashdata('alert'); ?>
                                    <div class="form-group">
                                        <br>
                                        <img src="<?= base_url('assets/img/' . $detail->foto1); ?>" width="80px">
                                    </div>
                                </td>
                                <td>
                                    <?= $this->session->flashdata('alert'); ?>
                                    <div class="form-group">
                                        <br>
                                        <img src="<?= base_url('assets/img/' . $detail->foto2); ?>" width="80px">
                                    </div>
                                </td>
                                <td>
                                    <?= $this->session->flashdata('alert'); ?>
                                    <div class="form-group">
                                        <br>
                                        <img src="<?= base_url('assets/img/' . $detail->foto3); ?>" width="80px">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>




                </table>
                <a href="<?= base_url('Umkm'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>

        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->