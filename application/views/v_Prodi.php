<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>

<h1>Data Prodi SISTECH
<a href="<?php echo base_url(). 'Home' ?>">(Back to Home)</a>
</h1>

<a href="<?php echo base_url(). 'Prodi/tambah_data' ?>">+ Tambah Data</a>
</h1>
<table border="1">
    <tr>
        <th>Kode Prodi</th>
        <th>Nama Prodi</th>
        <th>Aksi</th>
</tr>

<?php
foreach($prodi as $listProdi) { ?>
    <tr>
        <td><?php echo $listProdi->kode_prodi ?></td>
        <td><?php echo $listProdi->nama_prodi ?></td>
        <td>
            <a href="<?php echo base_url(). 'Prodi/edit_data/'.$listProdi->kode_prodi; ?>">Edit</a> || 
            <a href="<?php echo base_url(). 'Prodi/delete_data/'.$listProdi->kode_prodi; ?>">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>

</body>
</html>