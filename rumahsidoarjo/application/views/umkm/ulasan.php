<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow">
        <?php if ($title == 'ulasan') : ?>
            <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold text-info">DATA PRODUK</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="font-weight-bold text-dark">ID</td>
                                <td><?= $ulasan->id_umkm; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-dark">Kategori</td>
                                <td><?= $ulasan->kategori; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-dark">Nama</td>
                                <td><?= $ulasan->nama; ?></td>
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
                                                <img src="<?= base_url('assets/img/' . $ulasan->foto1); ?>" width="80px">
                                            </div>
                                        </td>
                                        <td>
                                            <?= $this->session->flashdata('alert'); ?>
                                            <div class="form-group">
                                                <img src="<?= base_url('assets/img/' . $ulasan->foto2); ?>" width="80px">
                                            </div>
                                        </td>
                                        <td>
                                            <?= $this->session->flashdata('alert'); ?>
                                            <div class="form-group">
                                                <img src="<?= base_url('assets/img/' . $ulasan->foto3); ?>" width="80px">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </thead>

                    </table>
                    <h6 class="m-0 font-weight-bold text-primary text-center">ULASAN PRODUK</h6>
                    <br>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center"><b>
                                    <th>ID Ulasan</th>
                                    <!-- <th>NIK</th> -->
                                    <th>User</th>
                                    <th>Ulasan</th>
                                    <th>Gambar 1</th>
                                    <th>Gambar 2</th>
                                    <th>Gambar 3</th>
                                    <th>Action</th>
                                </b>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            foreach ($ulasan22 as $a) : ?>
                                <tr>
                                    <td class="text-center"><?= $a->id_ulasan ?></td>
                                    <!-- <td><?= $a->NIK ?></td> -->
                                    <td><?= $a->nama ?></td>
                                    <td><?= $a->ulasan ?></td>
                                    <td>
                                        <?= $this->session->flashdata('alert'); ?>
                                        <div class="form-group">
                                            <br>
                                            <img src="<?= base_url('assets/img/' . $a->photo1); ?>" width="80px">
                                        </div>
                                    </td>
                                    <td> <img src="<?= base_url('assets/img/' . $a->photo2); ?>" width="80px"></td>
                                    <td> <img src="<?= base_url('assets/img/' . $a->photo3); ?>" width="80px"></td>
                                    <td><a style="margin-left: 5px;" href="<?= base_url('Umkm/delete_ulasan/' . $a->id_ulasan); ?>" onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Ulasan?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <a href="<?= base_url('Umkm'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>

        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->