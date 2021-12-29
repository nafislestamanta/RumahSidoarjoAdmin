<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>DAFTAR LAPORAN EVENT KAB.SIODARJO</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Nama Event</th>
                <th>Penyelenggara</th>
                <th>Waktu Pelaksanaan</th>
                <th>Tempat Kegiatan</th>
                <th>Deskripsi</th>

            </tr>

            <?php
            $no = 1;
            foreach ($event as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->kategori ?></td>
                    <td><?php echo $w->nama_event ?></td>
                    <td><?php echo $w->penyelenggara ?></td>
                    <td><?php echo $w->tgl_posting ?></td>
                    <td><?php echo $w->tempat_kegiatan ?></td>
                    <td><?php echo $w->deskripsi ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>