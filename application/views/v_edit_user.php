<html>
    <head>
        <title>CRUD DATABASE</title>
</head>
<body>
    <h1>Edit Data User DJY News</h1>

    <?php foreach($userEdit as $listUserEdit) { ?>

        <form action="<?php echo base_url(). 'User/proses_edit_data'; ?>" method="POST">

        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="nidn" value="<?= $listUserEdit->username ?>" readonly</td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_dosen" value="<?= $listUserEdit->nama_dosen ?>" readonly</td>
            </tr>

            <tr>
                <td>Prodi</td>
                <td>
                    <select name="kode_prodi">
                        <?php foreach($prodi as $listProdi) { ?>
                            
                            <option value="<?php echo $listProdi->kode_prodi ?>"

                            <?php if ($listProdi->kode_prodi == $listUserEdit->kode_prodi) { echo "selected"; }?> >

                            <?php echo $listProdi->nama_prodi ?> </option>

                            <?php } ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email_dosen" value="<?= $listUserEdit->email_dosen ?>" readonly</td>
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