<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DJY News</title>
</head>
<body>
    <h1>MENU DATA OPCS
    <h1><a href="<?php echo base_url(). 'Matakuliah/' ?>">a. Data Matkul SISTECH </a> </h1>
    <h1><a href="<?php echo base_url(). 'Prodi/' ?>">b. Data Prodi SISTECH </a> </h1>
    <h1><a href="<?php echo base_url(). 'Mahasiswa/' ?>">c. Data Mahasiswa SISTECH </a> </h1>
    <h1><a href="<?php echo base_url(). 'Dosen/' ?>">d. Data Dosen SISTECH </a> </h1>
    <h1><a href="<?php echo base_url(). 'Enroll/' ?>">e. Data Enroll Mahasiswa SISTECH </a> </h1>
</h1>
    <h1><a href="<?php echo base_url(). 'jadwal/' ?>">f. Data Jadwal Dosen SISTECH </a> </h1>
    <h1><a href="<?php echo base_url(). 'dompdf/' ?>">g. DOMPDF </a> </h1>
    <h1><a href="<?php echo base_url(). 'Dosen/logout_session_dosen' ?>">Logout </a> </h1>

    <table>
            <tr>
                <td>Nama Depan</td>
                <td>: <?php echo $this->session->userdata('nama_depan'); ?></td>
            </tr>

        <tr>
            <td>username</td>
            <td>: <?php echo $this->session->userdata('username'); ?></td>
        </tr>

             
</table>

</body>
</html>
