<h2>klub</h2>

<a href="<?php echo URL; ?>/klub/input" class="btn">Input Kendaraan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TAHUN BERDIRI</th>
            <th>ASAL NEGARA</th>
            <th>NAMA LIGA</th>
            <th>STADION</th>
            <th>RIVAL KLUB</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['tahun_berdiri']; ?></td>
                  <td><?php echo $row['negara']; ?></td>
                  <td><?php echo $row['liga']; ?></td>
                  <td><?php echo $row['stadion']; ?></td>
                  <td><?php echo $row['rival']; ?></td>
                  <td><a href="<?php echo URL; ?>/klub/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/klub/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

      <!-- Button trigger modal -->


</table>