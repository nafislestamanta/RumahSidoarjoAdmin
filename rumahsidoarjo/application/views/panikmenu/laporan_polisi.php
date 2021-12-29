<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>LAPORAN KANTOR POLISI</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Kantor</th>
                <th>Kecamatan</th>
                <th>Alamat</th>
                <th>Penanggung Jawab</th>
                <th>Telepon</th>

            </tr>

            <?php
            $no = 1;
            foreach ($pengaduan as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama_kantor_polisi ?></td>
                    <td><?php echo $w->kecamatan ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->penanggungjawab ?></td>
                    <td><?php echo $w->no_tlp ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>