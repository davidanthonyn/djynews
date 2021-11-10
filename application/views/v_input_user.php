<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>
    <h1>Tambah Data User SISTECH</h1>

    <form method="POST" action="<?php echo base_url(). 'User/proses_tambah_data'; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td>Nama Depan</td>
            <td><input type="text" name="nama_depan"></td>
        </tr>

        <tr>
            <td>Nama Belakang</td>
            <td><input type="text" name="nama_belakang"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email_user"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email_user"></td>
        </tr>


  <label for="jenis_kelamin">Jenis Kelamin</label>
  <select name="cars" id="jenis_kelamin">
    <option value="Laki-Laki">Volvo</option>
    <option value="Perempuan">Saab</option>
  </select>
  <br><br>


                    <tr>
                        <td></td>
                        <td><input type="submit" Value="Daftar"></td>
                    </tr>

</table>
</form>
</body>
</html>