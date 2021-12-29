<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>DAFTAR EVENT KOMUNITAS KAB.SIDOARJO</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Event</th>
                <th>Pelaksana</th>
                <th>Pelaksanaan</th>
                <th>No Telepon</th>
                <th>Status</th>
            </tr>

            <?php
            $no = 1;
            foreach ($event as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama_event ?></td>
                    <td><?php echo $w->nama_komunitas ?></td>
                    <td><?php echo $w->tanggal ?></td>
                    <td><?php echo $w->no_tlp ?></td>
                    <td><?php echo $w->status ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>