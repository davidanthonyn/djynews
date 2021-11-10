<html>
    <head>
        <title>CRUD DATABASE</title>
</head>
<body>
    <h1>Edit Data Prodi SISTECH</h1>

    <?php foreach($prodiEdit as $listProdiEdit) { ?>

        <form action="<?php echo base_url(). 'Prodi/proses_edit_data'; ?>" method="POST">

        <table>
            <tr>
                <td>Kode Prodi</td>
                <td><input type="text" name="kode_prodi" value="<?= $listProdiEdit->kode_prodi ?>" readonly</td>
            </tr>

            <tr>
                <td>Nama Prodi</td>
                <td><input type="text" name="nama_prodi" value="<?= $listProdiEdit->nama_prodi ?>" readonly</td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>

    <?php
    }
    ?>

</table>
</form>
</body>
</html>