<?php

namespace App\Models;

use App\Core\Model;

class Order extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_order";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
