<h2>Data Order</h2>

<a href="<?php echo URL; ?>/order/input" class="btn">Tambah Order</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE ORDER</th>
            <th>NAMA KURIR</th>
            <th>JUMLAH ONGKIR</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['order_id']; ?></td>
                  <td><?php echo $row['order_kode']; ?></td>
                  <td><?php echo $row['order_kurir']; ?></td>
                  <td><?php echo $row['order_ongkir']; ?></td>
                  <td><a href="<?php echo URL; ?>/order/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/order/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>