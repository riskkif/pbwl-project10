<h2>Input Klub</h2>

<form action="<?php echo URL; ?>/klub/save" method="post">
    <table>
    <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama"  required></td>
        </tr>
        <tr>
            <td>TAHUN BERDIRI</td>
            <td><input type="text" name="tahun_berdiri"  required></td>
        </tr>
        <tr>
            <td>ASAL NEGARA</td>
            <td><input type="text" name="negara"  required></td>
        </tr>
        <tr>
            <td>NAMA LIGA</td>
            <td><input type="text" name="liga"  required></td>
        </tr>
        <tr>
            <td>NAMA STADION</td>
            <td><input type="text" name="stadion"  required></td>
        </tr>
        <tr>
            <td>NAMA RIVAL</td>
            <td><input type="text" name="rival"  required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>