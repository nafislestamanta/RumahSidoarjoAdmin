<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:200px"><b>DAFTAR USER RUMAH SIDOARJO</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>

                <?php
                $no = 1;
                foreach ($user as $w) : ?>

                    <tr class="text-center">
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $w->NIK ?></td>
                        <td><?php echo $w->nama ?></td>
                        <td><?php echo $w->alamat ?></td>
                        <td><?php echo $w->no_telepon ?></td>
                    </tr>

                <?php endforeach; ?>
        </table>

    </div>
</body></html>