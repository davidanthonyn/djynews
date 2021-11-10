<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>
    <h1>Tambah Data Dosen SISTECH</h1>

    <form method="POST" action="<?php echo base_url(). 'Dosen/proses_tambah_data'; ?>">
    <table>
        <tr>
            <td>NIDN</td>
            <td><input type="text" name="nidn"></td>
        </tr>

            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="nama_dosen"></td>
            </tr> 

            <tr>
                <td>Prodi</td>
                <td>
                    <select name="kode_prodi">

                    <?php foreach($prodi as $listProdi) { ?>

                        <option value="<?php echo $listProdi->kode_prodi ?>">

                        <?php echo $listProdi->nama_prodi ?>

                    </option>

                    <?php } ?>
                    </select>
                    
                    </td>
            </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email_dosen"></td>
                </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" Value="SIMPAN"></td>
                    </tr>

</table>
</form>
</body>
</html>