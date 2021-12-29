<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>Daftar Sekolah dasar Kab.Sidoarjo</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Nama SD</th>
                <th>Kecamatan</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Akreditasi</th>
                <th>Status</th>
            </tr>

            <?php
            $no = 1;
            foreach ($sd as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama_sekolah ?></td>
                    <td><?php echo $w->kecamatan ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->no_telepon ?></td>
                    <td><?php echo $w->akreditasi ?></td>
                    <td><?php echo $w->status ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>