<!DOCTYPE html>
<html><head>
    <title></title>
</head><body class="text-center">

    <div class="container-fluid">

        <h3 style="padding-left:200px"><b>Daftar Tempat Wisata Kab.Sidoarjo</b></h3>
        <br>
        <br>
        <table border="2" width="100%">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama Wisata</th>
                    <th>Alamat</th>
                    <th>Pengelola</th>
                    <th>No Telepon</th>
                </tr>

                <?php
                $no = 1;
                foreach ($wisata as $w) : ?>

                    <tr class="text-center">
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $w->kategori ?></td>
                        <td><?php echo $w->nama_wisata ?></td>
                        <td><?php echo $w->alamat ?></td>
                        <td><?php echo $w->pengelola ?></td>
                        <td><?php echo $w->no_telepon ?></td>
                    </tr>

                <?php endforeach; ?>
        </table>

    </div>
</body></html>