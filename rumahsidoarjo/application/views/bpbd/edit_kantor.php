<div class="container-fluid">

    <div class="card shadow mb-4">
        <?php if ($title == 'Edit Kantor') : ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kantor BPBD</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Bpbd/update_kantor/' . $edit->id_bpbd); ?>" method="post">
                <div class="form-group">
                    <label for="varchar">
                        <h6 class="m-0 font-weight-bold text-dark">Nama Kantor</h6>
                    </label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="nama"
                        value="<?= $edit->nama; ?>" />
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="enum">
                        <h6 class="m-0 font-weight-bold text-dark">Kecamatan</h6>
                    </label>
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <?php foreach ($kecamatan as $k) : ?>
                        <option value="<?= $k->id_kecamatan ?>"
                            <?php if ($k->id_kecamatan == $edit->id_kecamatan) echo 'selected'; ?>><?= $k->kecamatan ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="varchar">
                        <h6 class="m-0 font-weight-bold text-dark">Alamat</h6>
                    </label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat"
                        value="<?= $edit->alamat; ?>" />
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="varchar">
                        <h6 class="m-0 font-weight-bold text-dark">Penanggung jawab</h6>
                    </label> <input type="text" class="form-control" name="pj" id="pj" maxlength="13"
                        placeholder="penanggung jawab" value="<?= $edit->penanggungjawab ?>" />
                    <?= form_error('pj', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="varchar">
                        <h6 class="m-0 font-weight-bold text-dark">No Telepon</h6>
                    </label>
                    <input type="number" class="form-control" name="notelp" id="notelp" maxlength="13"
                        placeholder="no telepon" value="<?= $edit->no_tlp ?>" />
                    <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('Bpbd'); ?>" class="btn btn-danger">Batal</a>
            </form>
        </div>

        <?php endif; ?>
    </div>
</div>
</div>