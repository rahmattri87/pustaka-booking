<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<!-- GET vs POST -->

<!-- 
    -- constat  = http://localhost/pusataka-booking/index.php/
    -- pages    = [controller]/[method]/[param] 
-->

<body>

    <?php
    if (validation_errors()) {
        echo '<script>alert("' . str_replace(array("\r", "\n"), '\n', strip_tags(validation_errors())) . '");</script>';
    }
    ?>

    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table border="1%">
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>