<html>
    <head>
        <title>CRUD DATABASE</title>
</head>
<body>
    <h1>Edit Data Dosen SISTECH</h1>

    <?php foreach($dosenEdit as $listDosenEdit) { ?>

        <form action="<?php echo base_url(). 'Dosen/proses_edit_data'; ?>" method="POST">

        <table>
            <tr>
                <td>NIDN</td>
                <td><input type="text" name="nidn" value="<?= $listDosenEdit->nidn ?>" readonly</td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_dosen" value="<?= $listDosenEdit->nama_dosen ?>" readonly</td>
            </tr>

            <tr>
                <td>Prodi</td>
                <td>
                    <select name="kode_prodi">
                        <?php foreach($prodi as $listProdi) { ?>
                            
                            <option value="<?php echo $listProdi->kode_prodi ?>"

                            <?php if ($listProdi->kode_prodi == $listDosenEdit->kode_prodi) { echo "selected"; }?> >

                            <?php echo $listProdi->nama_prodi ?> </option>

                            <?php } ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email_dosen" value="<?= $listDosenEdit->email_dosen ?>" readonly</td>
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