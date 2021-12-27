<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Kantor Polisi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode</td>
                            <td><?= $edit->id_laporan; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $edit->kategori; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pelopor</td>
                            <td><?= $edit->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Kejadian</td>
                            <td><?= $edit->lokasi_kejadian; ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Kejadian</td>
                            <td><?= $edit->waktu_kejadian; ?></td>
                        </tr>
                        <tr>
                            <td>Bukti Kejadian</td>
                            <td><img width="150px" height="150px"
                                    src="<?= base_url('assets/img/' . $edit->bukti_kejadian); ?>" alt="Tidak Ada Foto">
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $edit->deskripsi; ?></td>
                        </tr>
                        <tr>
                            <td>Petugas</td>
                            <td><?= $edit->petugas; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= $edit->status; ?></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Laporan Petugas</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('PanikMenu/updateKonfirmasi/' . $edit->id_laporan); ?>" method="post">
                <div class="table-responsive">
                    <div class="form-group">
                        <label for="varchar">
                            <h6 class="m-0 font-weight-bold text-dark">Tambah Laporan Petugas</h6>
                        </label>
                        <?php if ($edit->kategori == "Kriminal") : ?>
                        <div class="col-lg-5"><input style="margin-right: 5px" checked="checked" disabled="disabled"
                                type="checkbox" name="nama[]" id="nama" placeholder="" value="Kantor Polisi" />Kantor
                            Polisi</div>
                        <div class="col-lg-5"><input style="margin-right: 5px" type="checkbox" name="nama[]" id="nama"
                                placeholder="" value="Rumah Sakit" />Rumah Sakit</div>
                        <div class="col-lg-5"><input style="margin-right: 5px" type="checkbox" name="nama[]" id="nama"
                                placeholder="" value="BPBD" />BPBD</div>
                        <?php elseif ($edit->kategori == "Kecelakaan") : ?>
                        <div class="col-lg-5"><input style="margin-right: 5px" type="checkbox" name="nama[]" id="nama"
                                placeholder="" value="Kantor Polisi" />Kantor Polisi</div>
                        <div class="col-lg-5"><input style="margin-right: 5px" checked="checked" disabled="disabled"
                                type="checkbox" name="nama[]" id="nama" placeholder="Rumah Sakit"
                                value="Rumah Sakit" />Rumah Sakit</div>
                        <div class="col-lg-5"><input style="margin-right: 5px" type="checkbox" name="nama[]" id="nama"
                                placeholder="" value="BPBD" />BPBD</div>
                        <?php elseif ($edit->kategori == "Bencana") : ?>
                        <div class="col-lg-5"><input style="margin-right: 5px" type="checkbox" name="nama[]" id="nama"
                                placeholder="" value="Kantor Polisi" />Kantor Polisi</div>
                        <div class="col-lg-5"><input style="margin-right: 5px" type="checkbox" name="nama[]" id="nama"
                                placeholder="" value="Rumah Sakit" />Rumah Sakit</div>
                        <div class="col-lg-5"><input style="margin-right: 5px" checked="checked" disabled="disabled"
                                type="checkbox" name="nama[]" id="nama" placeholder="" value="BPBD" />BPBD</div>
                        <?php endif; ?>
                        <input type="text" hidden name="nik" id="nik" value="<?= $edit->NIK ?>">
                        <input type="text" hidden name="kategori" id="kategori" value="<?= $edit->kategori ?>">
                        <input type="text" hidden name="lokasi" id="lokasi" value="<?= $edit->lokasi_kejadian ?>">
                        <input type="text" hidden name="waktu" id="waktu" value="<?= $edit->waktu_kejadian ?>">
                        <input type="text" hidden name="bukti" id="bukti" value="<?= $edit->bukti_kejadian ?>">
                        <input type="text" hidden name="deskripsi" id="deskripsi" value="<?= $edit->deskripsi ?>">
                        <input type="text" hidden name="petugas" id="petugas" value="<?= $edit->petugas ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('PanikMenu/konfirmasi'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->