<h3>Daftar Barang</h3>
<table border=1 cellspacing=0 cellpadding=0>
    <thead>
        <tr>
            <td>no</td>
            <td>kode</td>
            <td>nama</td>
            <td>aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($barang_data as $barang) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $barang['kd_cat'] ?></td>
            <td><?php echo $barang['warna'] ?></td>
            <td>
                <a href="#">edit</a>
                <a href="#">delete</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>