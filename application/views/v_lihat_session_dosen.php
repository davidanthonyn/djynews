<html>
    <head>
        <title>SESSION DOSEN</title>
</head>

<body>
    <h1>OUTPUT SESSION</h1>


    <table>
        <tr>
            <td>NIDN</td>
            <td>: <?php echo $this->session->userdata('nidn'); ?></td>
        </tr>

            <tr>
                <td>Nama Dosen</td>
                <td>: <?php echo $this->session->userdata('nama_dosen'); ?></td>
            </tr> 

            <a href="<?php echo base_url(). 'Dosen/session_data'; ?>">Back</a>
</table>
</body>
</html>