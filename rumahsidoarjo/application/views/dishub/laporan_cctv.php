<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:240px"><b>Daftar CCTV Kab.Sidoarjo</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Cctv</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>

            <?php
            $no = 1;
            foreach ($cctv as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->status ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>