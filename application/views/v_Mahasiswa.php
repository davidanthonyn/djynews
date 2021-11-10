<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>

<h1>Data Mahasiswa SISTECH
<a href="<?php echo base_url(). 'Home' ?>">(Back to Home)</a>
</h1>

<a href="<?php echo base_url(). 'Mahasiswa/tambah_data' ?>">+ Tambah Data</a>
</h1>
<table border="1">
    <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Email Mahasiswa</th>
        <th>Kode Prodi</th>
        <th>Aksi</th>
</tr>

<?php
foreach($mahasiswa as $listMahasiswa) { ?>
    <tr>
        <td><?php echo $listMahasiswa->npm ?></td>
        <td><?php echo $listMahasiswa->nama_mahasiswa ?></td>
        <td><?php echo $listMahasiswa->email_mahasiswa ?></td>
        <td><?php echo $listMahasiswa->kode_prodi ?></td>
        <td>
            <a href="<?php echo base_url(). 'Mahasiswa/edit_data/'.$listMahasiswa->npm; ?>">Edit</a> || 
            <a href="<?php echo base_url(). 'Mahasiswa/delete_data/'.$listMahasiswa->npm; ?>">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>

</body>
</html>