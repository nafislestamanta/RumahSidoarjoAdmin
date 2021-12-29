<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>LAPORAN RIWAYAT LAPORAN KESEHATAN</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>ID laporan</th>
                <th>kategori</th>
                <th>Pelapor</th>
                <th>Lokasi Kejadian</th>
                <th>Waktu Kejadian</th>
                <th>Status</th>
            </tr>

            <?php
            $no = 1;
            foreach ($riwayat as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->id_laporan ?></td>
                    <td><?php echo $w->kategori ?></td>
                    <td><?php echo $w->nama ?></td>
                    <td><?php echo $w->lokasi_kejadian ?></td>
                    <td><?php echo $w->waktu_kejadian ?></td>
                    <td><?php echo $w->status ?></td>





                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>