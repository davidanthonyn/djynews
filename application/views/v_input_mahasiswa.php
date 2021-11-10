<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa SISTECH</h1>

    <form method="POST" action="<?php echo base_url(). 'Mahasiswa/proses_tambah_data'; ?>">
    <table>
        <tr>
            <td>NPM</td>
            <td><input type="text" name="npm"></td>
        </tr>

            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama_mahasiswa"></td>
            </tr> 

            <tr>
                    <td>Email Mahasiswa</td>
                    <td><input type="text" name="email_mahasiswa"></td>
                </tr>

                <tr>
                    <td>Kode Prodi</td>
                    <td><input type="text" name="kode_prodi"></td>
                </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" Value="SIMPAN"></td>
                    </tr>

</table>
</form>
</body>
</html>