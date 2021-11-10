<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>
    <h1>Tambah Data Prodi SISTECH</h1>

    <form method="POST" action="<?php echo base_url(). 'Matakuliah/proses_tambah_data'; ?>">
    <table>
        <tr>
            <td>Kode Matkul</td>
            <td><input type="text" name="kode_matkul"></td>
        </tr>

            <tr>
                <td>Nama Matkul</td>
                <td><input type="text" name="nama_matkul"></td>
            </tr> 

            <tr>
                <td>SKS</td>
                <td><input type="text" name="sks"></td>
            </tr> 

            <tr>
                <td>Sisa Kuota</td>
                <td><input type="text" name="sisa_kuota"></td>
            </tr> 

                    <tr>
                        <td></td>
                        <td><input type="submit" Value="SIMPAN"></td>
                    </tr>

</table>
</form>
</body>
</html>