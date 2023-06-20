<h2>Edit pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
   <table>
   <input type="hidden" name="pel_id"value="<?php echo $data['row']['pel_id']; ?>">
            <tr>
            <td>No Pelanggan</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" ></td>
            </tr>
           <tr>
           <td>Nama Pelanggan</td>
            <td><input type="text" name="pel_nama"value="<?php echo $data['row']['pel_nama']; ?>" ></td>
           </tr>
           <tr>
           <td>Alamat</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="5" required><?php echo $data['row']['pel_alamat']; ?></textarea></td>
           </tr>
           <tr>
           <td>No Hp</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" ></td>
           </tr>
           <tr>
           <td>Ktp Pelanggan</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" ></td>
           </tr>
           <tr>
           <td>Seri pelanggan</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>"></td>
           </tr>
            <tr>
            <td>Meteran pelanggan</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>"></td>
            </tr>
            <tr>
            <td>Pelanggan Aktif</td>
            <td><input type="text" name="pel_aktif" value="<?php echo $data['row']['pel_aktif']; ?>"></td>
            </tr>
            <tr>
            <td>Nama Golongan</td>
            <td><select name="pel_id_gol" id="">
            <?php foreach ($data['data_gol'] as $row) { ?>
                <option value="<?= $row['gol_id'] ?>"><?php echo $row['gol_nama']; ?></option>
            <?php } ?>
            </select></td>
            </tr>
           <tr>
           <td>Nama User</td>
            <td><select name="pel_id_user" id="" >
        <?php foreach ($data['data_user'] as $row) { ?>
            <option value="<?= $row['user_id'] ?>"><?php echo $row['user_nama']; ?></option>
        <?php } ?>
            </select></td>
           </tr>
            <tr>
            <td></td>
           <td> <input type="submit" name="btn_update"value="UPDATE"></td>
            </tr>
   </table>
</form><br><br><br><br>