<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<body>

<h1>Data Enroll SISTECH
<a href="<?php echo base_url(). 'Home' ?>">(Back to Home)</a>
</h1>

<a href="<?php echo base_url(). 'Enroll/tambah_data' ?>">+ Tambah Data</a>
</h1>
<table border="1">
    <tr>
        <th>Kode Enroll</th>
        <th>NPM</th>
        <th>Kode Matkul</th>
        <th>Aksi</th>
</tr>

<?php
foreach($enroll as $listEnroll) { ?>
    <tr>
        <td><?php echo $listEnroll->kode_enroll ?></td>
        <td><?php echo $listEnroll->npm ?></td>
        <td><?php echo $listEnroll->kode_matkul ?></td>
        <td>
            <a href="<?php echo base_url(). 'Enroll/edit_data/'.$listEnroll->kode_enroll; ?>">Edit</a> || 
            <a href="<?php echo base_url(). 'Enroll/delete_data/'.$listEnroll->kode_enroll; ?>">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>

</body>
</html>