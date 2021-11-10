<html>
    <head>
        <title>CRUD DATABASE</title>
</head>

<script src="<?php echo base_url()?>jquery-3.4.1.min.js"></script>

<script>
    $(document).ready(
        function()
    {

        $('#nidn').change(
            function()
        {
            var nidn = $ (this).val();

            $.ajax(
                {
                    type    : 'POST',

                    url     : "<?php echo base_url('Jadwal/getDosenByAjax')?>",

                    dataType: "JSON",

                    data    : {nidn:nidn},

                    success : function(data) {

                        $.each(data,function() {
                            $('[name="email"]').val(data.email);
                        
                        });
                    }
                });
        });
    });
    </script>

    <script>
            $(document).ready(function() {
                $('#kode_matkul').change(function() {
                    var kode_matkul = $(this).val();

                    $.ajax({

                        type : 'POST',

                        url : "<?php echo base_url('Jadwal/getSksByAjax')?>",

                        dataType : "JSON",

                        data : {kode_matkul:kode_matkul},

                        success : function(data)

                        {

                            $.each(data,function(){

                                $('[name="sks"]').val(data.sks);

                                $('[name="sisa_kuota"]').val(data.sisa_kuota);

                            });

                        }

                    });

                });

            });
</script>

<body>
    <h1>Tambah Data Jadwal Dosen SISTECH</h1>

    <form method="POST" action="<?php echo base_url(). 'Jadwal/insert_data'; ?>">
    <table>
        <tr>
            <td>NIDN - Nama Dosen</td>
            <td>: </td>
                        <td>
                            <select name="nidn" id="nidn">

                            <option value="0"> -- Pilih Dosen -- </option>
                                <?php foreach($dosen as $listDosen) { ?>
                                    <option value="<?php echo $listDosen->nidn ?>"><?php echo $listDosen->
                                    nidn . " - " . $listDosen->nama_dosen ?></option>
                                    <?php } ?>
                                </select>
                        </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>: </td>
            <td><input type="text" name="email" id="email" disabled></td>
        </tr>

        <tr>
            <td>Kode Matkul - Matkul</td>
            <td>: </td>
                        <td>
                            <select name="kode_matkul" id="kode_matkul">
                                
                            <option value="0"> -- Pilih Mata Kuliah -- </option>
                                <?php foreach($matkul as $listMatkul) { ?>
                                    <option value="<?php echo $listMatkul->kode_matkul ?>"><?php echo $listMatkul->
                                    kode_matkul . " - " . $listMatkul->nama_matkul ?></option>
                                    <?php } ?>
                                </select>
                        </td>
        </tr>

        <tr>
            <td>SKS</td>
            <td>: </td>
            <td><input type="text" name="sks" id="sks" disabled></td> <td>SKS</td>
        </tr>

        <tr>
            <td>Sisa Kuota</td>
            <td>: </td>
            <td><input type="text" name="sisa_kuota" id="sisa_kuota" disabled></td>
        </tr>

        

                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" Value="SIMPAN"></td>
                    </tr>

</table>
</form>
</body>
</html>