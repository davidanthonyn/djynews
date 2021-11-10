<html>
    <head>
        <title>CRUD DATABASE</title>
</head>
<body>
    <h1>Edit Data Mahasiswa SISTECH</h1>

    <?php foreach($mahasiswaEdit as $listMahasiswaEdit) { ?>

        <form action="<?php echo base_url(). 'Mahasiswa/proses_edit_data'; ?>" method="POST">

        <table>
            <tr>
                <td>NPM Mahasiswa</td>
                <td><input type="text" name="npm" value="<?= $listMahasiswaEdit->npm ?>" readonly</td>
            </tr>

            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama_mahasiswa" value="<?= $listMahasiswaEdit->nama_mahasiswa ?>" readonly</td>
            </tr>

            <tr>
                <td>Email Mahasiswa</td>
                <td><input type="text" name="email_mahasiswa" value="<?= $listMahasiswaEdit->email_mahasiswa ?>" readonly</td>
            </tr>

            <tr>
                <td>Kode Prodi</td>
                <td><input type="text" name="kode_prodi" value="<?= $listMahasiswaEdit->kode_prodi ?>" readonly</td>
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