<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>LAPORAN PENGADUAN UMUM</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Pelapor</th>
                <th>Kategori</th>
                <th>Lokasi Kejadian</th>
                <th>Waktu Kejadian</th>
                <th>Status</th>
            </tr>

            <?php
            $no = 1;
            foreach ($pengaduan as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama ?></td>
                    <td><?php echo $w->kategori ?></td>
                    <td><?php echo $w->lokasi_kejadian ?></td>
                    <td><?php echo $w->waktu_kejadian ?></td>
                    <td><?php echo $w->status_pengaduan ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>