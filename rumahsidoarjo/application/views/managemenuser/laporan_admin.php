<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">
        <h3 style="padding-left:370px"><b>DAFTAR ADMIN RUMAH SIDOARJO</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Role</th>
            </tr>

            <?php
            $no = 1;
            foreach ($admin as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nip ?></td>
                    <td><?php echo $w->username ?></td>
                    <td><?php echo $w->nama ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->no_tlp ?></td>
                    <td><?php echo $w->nama_role ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>