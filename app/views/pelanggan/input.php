<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
    <table>
        <tr>
            <td>NO PELANGGAN</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>NAMA PELANGGAN</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>ALAMAT PELANGGAN</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td>KTP PELANGGAN</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>SERI PELANGGAN</td>
            <td><input type="text" name="pel_seri"></td>
        </tr>
        <tr>
            <td>METERAN PELANGGAN</td>
            <td><input type="text" name="pel_meteran"></td>
        </tr>
        <tr>
            <td>PELANGGAN AKTIF</td>
            <td><input type="text" name="pel_aktif"></td>
        </tr>
        <tr>
            <td>NAMA GOLONGAN</td>
            <td><select name="pel_id_gol" id="">
            <?php foreach ($data['data_gol'] as $row) { ?>
                <option value="<?= $row['gol_id'] ?>"><?php echo $row['gol_nama']; ?></option>
            <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>ID USER</td>
            <td><select name="pel_id_user" id="">
        <?php foreach ($data['data_user'] as $row) { ?>
            <option value="<?= $row['user_id'] ?>"><?php echo $row['user_nama']; ?></option>
        <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form><br><br><br><br>