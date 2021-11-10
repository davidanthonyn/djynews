<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>
    <h1>Tambah Data Prodi SISTECH</h1>

    <form method="POST" action="<?php echo base_url(). 'Prodi/proses_tambah_data'; ?>">
    <table>
        <tr>
            <td>Kode Prodi</td>
            <td><input type="text" name="kode_prodi"></td>
        </tr>

            <tr>
                <td>Nama Prodi</td>
                <td><input type="text" name="nama_prodi"></td>
            </tr> 

                    <tr>
                        <td></td>
                        <td><input type="submit" Value="SIMPAN"></td>
                    </tr>

</table>
</form>
</body>
</html>