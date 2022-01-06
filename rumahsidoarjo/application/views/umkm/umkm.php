<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h5><i class="fas fa-store"></i><b style="padding-left:5px">Usaha Mikro Kecil Menengah (UMKM)</b></h5>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 15;">
                <?php if ($title == "Kerajinan") : ?>
                    Kerajinan
                <?php elseif ($title == "Makanan") : ?>
                    Makanan
                <?php elseif ($title == "Pertanian") : ?>
                    Pertanian
                <?php else : ?>
                    Kategori
                <?php endif; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('Umkm'); ?>">Semua</a>
                <a class="dropdown-item" href="<?= base_url('Umkm/tampil_kerajinan'); ?>">Kerajinan</a>
                <a class="dropdown-item" href="<?= base_url('Umkm/tampil_makanan'); ?>">Makanan</a>
                <a class="dropdown-item" href="<?= base_url('Umkm/tampil_pertanian'); ?>">Pertanian</a>
            </div>

            <?php if ($title == "Kerajinan") : ?>
                <a href="<?= base_url('Umkm/pdf_kategori/' . $kategori->kategori); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
            <?php elseif ($title == "Makanan") : ?>
                <a href="<?= base_url('Umkm/pdf_kategori/' . $kategori->kategori); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
            <?php elseif ($title == "Pertanian") : ?>
                <a href="<?= base_url('Umkm/pdf_kategori/' . $kategori->kategori); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
            <?php else : ?>
                <a href="<?= base_url('Umkm/pdf_umkm'); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>
            <?php endif; ?>

            <!-- <a href="<?= base_url('Umkm/pdf_umkm'); ?>" class="btn-sm btn-success"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a> -->
            <a href="<?= base_url('Umkm/tambah_umkm'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus" style="padding-right: 8px;"></i>UMKM</a>
        </div>


        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center"><b>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>No Telepon</th>
                                <th>Action</th>
                            </b>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php $no = 1;
                        if ($title == "Kerajinan") :
                            foreach ($tampil as $a) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= word_limiter($a->nama, 3); ?></td>
                                    <td><?= $a->kategori ?></td>
                                    <td><?= word_limiter($a->deskripsi, 2); ?></td>
                                    <td><?= $a->no_telp ?></td>
                                    <td><a href="<?= base_url('Umkm/edit_umkm/' . $a->id_umkm); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/detail_umkm/' . $a->id_umkm); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/delete/' . $a->id_umkm); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        <a style="margin-left: 5px;" href="<?= base_url('Umkm/ulasan/' . $a->id_umkm); ?>" class="btn btn-info btn-sm"><i class="fas fa-comments"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <?php $no = 1;
                        elseif ($title == "Makanan") :
                            foreach ($tampil as $a) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= word_limiter($a->nama, 3); ?></td>
                                    <td><?= $a->kategori ?></td>
                                    <td><?= word_limiter($a->deskripsi, 2); ?></td>
                                    <td><?= $a->no_telp ?></td>
                                    <td><a href="<?= base_url('Umkm/edit_umkm/' . $a->id_umkm); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/detail_umkm/' . $a->id_umkm); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/delete/' . $a->id_umkm); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        <a style="margin-left: 5px;" href="<?= base_url('Umkm/ulasan/' . $a->id_umkm); ?>" class="btn btn-info btn-sm"><i class="fas fa-comments"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <?php $no = 1;
                        elseif ($title == "Pertanian") :
                            foreach ($tampil as $a) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= word_limiter($a->nama, 3); ?></td>
                                    <td><?= $a->kategori ?></td>
                                    <td><?= word_limiter($a->deskripsi, 2); ?></td>
                                    <td><?= $a->no_telp ?></td>
                                    <td><a href="<?= base_url('Umkm/edit_umkm' . $a->id_umkm); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/detail_umkm/' . $a->id_umkm); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/delete/' . $a->id_umkm); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        <a style="margin-left: 5px;" href="<?= base_url('Umkm/ulasan/' . $a->id_umkm); ?>" class="btn btn-info btn-sm"><i class="fas fa-comments"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <?php $no = 1;
                        else :
                            foreach ($tampil as $a) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= word_limiter($a->nama, 3); ?></td>
                                    <td><?= $a->kategori ?></td>
                                    <td><?= word_limiter($a->deskripsi, 2); ?></td>
                                    <td><?= $a->no_telp ?></td>
                                    <td><a href="<?= base_url('Umkm/edit_umkm/' . $a->id_umkm); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/detail_umkm/' . $a->id_umkm); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a style="margin-left: 5px;" href="<?= base_url('Umkm/delete/' . $a->id_umkm); ?>" onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        <a style="margin-left: 5px;" href="<?= base_url('Umkm/ulasan/' . $a->id_umkm); ?>" class="btn btn-info btn-sm"><i class="fas fa-comments"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>