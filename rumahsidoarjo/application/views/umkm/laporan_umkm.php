<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:370px"><b>Daftar UMKM Kab.Sidoarjo</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
            <tr>
                <th>No</th>
                <th>Nama UMKM</th>
                <th>Owner</th>
                <th>Kategori</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Deskripsi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($umkm as $w) : ?>

                <tr class="text-center">
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $w->nama ?></td>
                    <td><?php echo $w->penanggung_jawab ?></td>
                    <td><?php echo $w->kategori ?></td>
                    <td><?php echo $w->alamat ?></td>
                    <td><?php echo $w->no_telp ?></td>
                    <td><?php echo $w->deskripsi ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</body></html>