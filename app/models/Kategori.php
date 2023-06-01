<?php

namespace App\Models;

use App\Core\Model;

class kategori extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_kategori";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
