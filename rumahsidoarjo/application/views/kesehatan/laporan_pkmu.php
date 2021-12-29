<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>DFATRA PKMU KAB.SIODARJO</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Nama PKMU</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Pengelola</th>
                <th>No Telepon</th>
            </tr>

            <?php
            $no = 1;
            foreach ($pkmu as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->kecamatan ?></td>
                    <td><?php echo $w->kepemilikan ?></td>
                    <td><?php echo $w->no_telepon ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>