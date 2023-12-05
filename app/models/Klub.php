<?php

namespace App\Models;

use App\Core\Model;

class Klub extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_klub";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $tahun_berdiri = $_POST['tahun_berdiri'];
            $negara = $_POST['negara'];
            $liga = $_POST['liga'];
            $stadion = $_POST['stadion'];
            $rival = $_POST['rival'];

            

          $sql = "INSERT INTO tb_klub
            SET nama=:nama, tahun_berdiri=:tahun_berdiri, negara=:negara, liga=:liga, stadion=:stadion, rival=:rival";
          $stmt = $this->db->prepare($sql);


            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":tahun_berdiri", $tahun_berdiri);
            $stmt->bindParam(":negara", $negara);
            $stmt->bindParam(":liga", $liga);
            $stmt->bindParam(":stadion", $stadion);
            $stmt->bindParam(":rival", $rival);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_klub WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $tahun_berdiri = $_POST['tahun_berdiri'];
            $negara = $_POST['negara'];
            $liga = $_POST['liga'];
            $id = $_POST['id'];
            $stadion = $_POST['stadion'];
            $rival = $_POST['rival'];

            $sql = "UPDATE tb_klub
          SET nama=:nama, tahun_berdiri=:tahun_berdiri, negara=:negara, liga=:liga, stadion=:stadion, rival=:rival WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":tahun_berdiri", $tahun_berdiri);
          $stmt->bindParam(":negara", $negara);
          $stmt->bindParam(":liga", $liga);
          $stmt->bindParam(":stadion", $stadion);
          $stmt->bindParam(":rival", $rival);
          $stmt->bindParam(":id", $id);

          $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_klub WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
