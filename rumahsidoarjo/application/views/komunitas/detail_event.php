<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td class="font-weight-bold">ID Event</td>
                            <td><?= $detail->id_event; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Nama Event</td>
                            <td><?= $detail->nama_event; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Komunitas Pelaksana</td>
                            <td><?= $detail->nama_komunitas; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Tanggal Pelaksanaan</td>
                            <td><?= $detail->tanggal; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Waktu Pelaksanaan</td>
                            <td><?= $detail->waktu; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Tempat Pelaksanaan</td>
                            <td><?= $detail->tempat; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">No Telepon</td>
                            <td><?= $detail->no_tlp; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Penanggung Jawab Kegiatan</td>
                            <td><?= $detail->penanggung_jawab; ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deskripsi Event</td>
                            <td><?= $detail->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Foto 1</td>
                            <td>
                                <?= $this->session->flashdata('alert'); ?>
                                <div class="form-group">
                                    <br>
                                    <img src="<?= base_url('assets/img/' . $detail->foto1); ?>" id="foto" width="150px">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Foto 2</td>
                            <td>
                                <?= $this->session->flashdata('alert'); ?>
                                <div class="form-group">
                                    <br>
                                    <img src="<?= base_url('assets/img/' . $detail->foto2); ?>" id="foto" width="150px">
                                </div>
                            </td>
                        </tr>

                    </thead>
                </table>
                <a href="<?= base_url('Komunitas/event'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->