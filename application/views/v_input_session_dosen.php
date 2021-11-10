<html>
    <head>
        <title>SESSION DOSEN</title>
</head>

<body>
    <h1>INPUT SESSION</h1>

    <form method="POST" action="<?php echo base_url(). 'Dosen/proses_session_data'; ?>">
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
                    <td></td>
                    <td>
                        <input type="submit" name="lihat" value="LIHAT SESSION">
                        <input type="submit" name="simpan" value="SIMPAN">
                        <input type="submit" name="hapus" value="HAPUS">
                    </td>
                </tr>

</table>
</form>
</body>
</html>