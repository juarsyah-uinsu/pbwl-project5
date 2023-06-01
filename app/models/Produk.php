<?php

namespace App\Models;

use App\Core\Model;

class Produk extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_produk";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
