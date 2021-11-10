<html>
    <head>
        <title>CRUD DATABASE</title>
</head>
<body>
    <h1>Edit Data Matkul SISTECH</h1>

    <?php foreach($matkulEdit as $listMatkulEdit) { ?>

        <form action="<?php echo base_url(). 'Matakuliah/proses_edit_data'; ?>" method="POST">

        <table>
            <tr>
                <td>Kode Matkul</td>
                <td><input type="text" name="kode_matkul" value="<?= $listMatkulEdit->kode_matkul ?>" readonly</td>
            </tr>

            <tr>
                <td>Nama Matkul</td>
                <td><input type="text" name="nama_matkul" value="<?= $listMatkulEdit->nama_matkul ?>" readonly</td>
            </tr>

            <tr>
                <td>SKS</td>
                <td><input type="text" name="sks" value="<?= $listMatkulEdit->sks ?>" readonly</td>
            </tr>

            <tr>
                <td>Sisa Kuota</td>
                <td><input type="text" name="sisa_kuota" value="<?= $listMatkulEdit->sisa_kuota ?>" readonly</td>
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