<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:250px"><b>LAPORAN PERUSAHAAN</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Kepemilikan</th>
                <th>Alamat</th>
                <th>No Telepon</th>
            </tr>

            <?php
            $no = 1;
            foreach ($perusahaan as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama_perusahaan ?></td>
                    <td><?php echo $w->kepemilikan ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->no_tlp ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>