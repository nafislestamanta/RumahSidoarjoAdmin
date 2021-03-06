<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Lowongan Kerja</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td class="font-weight-bold">Judul Lowongan</td>
                            <td><?= $detail->judul_lowongan; ?></td>
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
                            <td class="font-weight-bold">Deskripsi Pekerjaan</td>
                            <td><?= $detail->deskripsi_pekerjaan; ?></td>
                        </tr>








                        <table class="table table-bordered" width="90%" cellspacing="0">
                            <thead>
                                <tr class="text-center"><b>
                                        <th>Gambar 1</th>
                                        <th>Gambar 2</th>
                                    </b>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <br>
                                            <img src="<?= base_url('assets/img/' . $detail->foto_lowongan); ?>" width="100px">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <br>
                                            <img src="<?= base_url('assets/img/' . $detail->file); ?>" width="100px">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </thead>
                </table>
                <a href="<?= base_url('LowonganKerja/lowongan'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->