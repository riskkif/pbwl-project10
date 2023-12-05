<h2>Edit Klub</h2>

<form action="<?php echo URL; ?>/klub/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>TAHUN BERDIRI</td>
            <td><input type="text" name="tahun_berdiri" value="<?php echo $data['row']['tahun_berdiri']; ?>" required></td>
        </tr>
        <tr>
            <td>ASAL NEGARA</td>
            <td><input type="text" name="negara" value="<?php echo $data['row']['negara']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA LIGA</td>
            <td><input type="text" name="liga" value="<?php echo $data['row']['liga']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA STADION</td>
            <td><input type="text" name="stadion" value="<?php echo $data['row']['stadion']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA RIVAL</td>
            <td><input type="text" name="rival" value="<?php echo $data['row']['rival']; ?>" required></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>