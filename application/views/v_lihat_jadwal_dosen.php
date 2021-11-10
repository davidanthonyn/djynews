<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD DATABASE</title>
</head>

<body>
<h1>Data Jadwal Dosen SISTECH
<a href="<?php echo base_url(). 'Home' ?>">(Back to Home)</a>
</h1>

<a href="<?php echo base_url(). 'Jadwal/tambah_data' ?>">+ Tambah Data</a>

<table border="1">
    <tr>
        <th>ID Jadwal</th>
        <th>NIDN</th>

        <th>Nama Dosen</th>
        <th>ID Matkul</th>

        <th>Nama Matkul</th>
        <th>Aksi</th>
</tr>

<?php
foreach($jadwal as $listJadwal) { ?>
    <tr>
        <td><?php echo $listJadwal->kode_jadwal ?></td>
        <td><?php echo $listJadwal->nidn ?></td>
        <td><?php echo $listJadwal->nama_dosen ?></td>
        <td><?php echo $listJadwal->kode_matkul ?></td>
        <td><?php echo $listJadwal->nama_matkul ?></td>
        <td>
            <a href="<?php echo base_url(). 'Jadwal/edit_data/'.$listJadwal->kode_jadwal; ?>">Edit</a> || 
            <a href="<?php echo base_url(). 'Jadwal/delete_data/'.$listJadwal->kode_jadwal; ?>">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>

</body>
</html>