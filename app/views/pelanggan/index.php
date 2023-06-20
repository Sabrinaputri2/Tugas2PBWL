<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Pelanggan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ID USERS</th>
            <th>ID GOLONGAN</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>KTP Pelanggan</th>
            <th>Seri Pelanggan</th>
            <th>Meteran Pelanggan</th>
            <th>Pelanggan Aktif</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td>
                  <a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a>
                  </td>
                  <td>
                  <a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>"class="btn">Delete</a>
                  </td>
            </tr>
      <?php } ?>

</table>