<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h5><i class="fas fa-award"></i><b style="padding-left:5px">Event Komunitas</b></h5>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 15;">
                <?php if ($title == "Event Selesai") : ?>
                Event Selesai
                <?php elseif ($title == "Event Akan Datang") : ?>
                Event Akan Datang
                <?php else : ?>
                Kategori
                <?php endif; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('Komunitas/event'); ?>">Semua</a>
                <a class="dropdown-item" href="<?= base_url('Komunitas/tampil_event_selesai'); ?>">Event Selesai</a>
                <a class="dropdown-item" href="<?= base_url('Komunitas/tampil_event_segera'); ?>">Event Akan Datang </a>

            </div>
            <a href="" class="btn-sm btn-primary"><i class="fas fa-download" style="padding-right: 8px;"></i>Report</a>

            <a href="<?= base_url('Komunitas/tambah_event'); ?>" class="btn-sm btn-primary"><i class="fas fa-plus"
                    style="padding-right: 8px;"></i>Event</a>
        </div>


        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center"><b>
                                <th>Id</th>
                                <th>Nama Event</th>
                                <th>Komunitas Pelaksana</th>
                                <th>Hari Pelaksanaan</th>
                                <th>No Telepon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </b>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php if ($title == "Event Selesai") :
                            foreach ($tampil as $a) : ?>
                        <tr>
                            <td><?= $a->id_event ?></td>
                            <td><?= word_limiter($a->nama_event, 3); ?></td>
                            <td><?= $a->nama_komunitas ?></td>
                            <td><?= $a->tanggal ?></td>
                            <td><?= $a->no_tlp ?></td>
                            <td><?= $a->status ?></td>
                            <td><a href="<?= base_url('Komunitas/edit_event' . $a->id_event); ?>"
                                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                    style="margin-left: 5px;"
                                    href="<?= base_url('Komunitas/detail_event/' . $a->id_event); ?>"
                                    class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                    style="margin-left: 5px;"
                                    href="<?= base_url('Komunitas/delete_event/' . $a->id_event); ?>"
                                    onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>

                        <?php elseif ($title == "Event Akan Datang") :
                            foreach ($tampil as $a) : ?>
                        <tr>
                            <td><?= $a->id_event ?></td>
                            <td><?= word_limiter($a->nama_event, 3); ?></td>
                            <td><?= $a->nama_komunitas ?></td>
                            <td><?= $a->tanggal ?></td>
                            <td><?= $a->no_tlp ?></td>
                            <td><?= $a->status ?></td>
                            <td><a href="<?= base_url('Komunitas/edit_event' . $a->id_event); ?>"
                                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                    style="margin-left: 5px;"
                                    href="<?= base_url('Komunitas/detail_event/' . $a->id_event); ?>"
                                    class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                    style="margin-left: 5px;"
                                    href="<?= base_url('Komunitas/delete_event/' . $a->id_event); ?>"
                                    onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>

                        <?php elseif ($title == "Event") :
                            foreach ($tampil as $a) : ?>
                        <tr>
                            <td><?= $a->id_event ?></td>
                            <td><?= word_limiter($a->nama_event, 3); ?></td>
                            <td><?= $a->nama_komunitas ?></td>
                            <td><?= $a->tanggal ?></td>
                            <td><?= $a->no_tlp ?></td>
                            <td><?= $a->status ?></td>
                            <td><a href="<?= base_url('Komunitas/edit_event/' . $a->id_event); ?>"
                                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a><a
                                    style="margin-left: 5px;"
                                    href="<?= base_url('Komunitas/detail_event/' . $a->id_event); ?>"
                                    class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a><a
                                    style="margin-left: 5px;"
                                    href="<?= base_url('Komunitas/delete_event/' . $a->id_event); ?>"
                                    onclick="javascript: return confirm('Anda Yakin Hapus ?')"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>