<h2>Data Produk</h2>

<a href="<?php echo URL; ?>/produk/input" class="btn">Tambah Produk</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE PRODUK</th>
            <th>NAMA PRODUK</th>
            <th>HARGA PRODUK</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['produk_id']; ?></td>
                  <td><?php echo $row['produk_kode']; ?></td>
                  <td><?php echo $row['produk_nama']; ?></td>
                  <td><?php echo $row['produk_hrg']; ?></td>
                  <td><a href="<?php echo URL; ?>/produk/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/produk/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>