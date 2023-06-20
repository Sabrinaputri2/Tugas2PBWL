<?php

namespace App\Models;

use App\Core\Model;

class pelanggan extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function tampil_users()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function tampil_gol()
      {
            $query = "SELECT * FROM tb_golongan ";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function input()
      {
            $query = "INSERT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function simpan()
      {
            $no = $_POST['pel_no'];
            $nama = $_POST['pel_nama'];
            $alamat = $_POST['pel_alamat'];
            $hp = $_POST['pel_hp'];
            $ktp = $_POST['pel_ktp'];
            $seri = $_POST['pel_seri'];
            $meteran = $_POST['pel_meteran'];
            $aktif = $_POST['pel_aktif'];
            $golongan = $_POST['pel_id_gol'];
            $user = $_POST['pel_id_user'];

            $sql = "INSERT INTO tb_pelanggan (pel_id_gol,pel_no,pel_nama,pel_alamat,pel_hp,pel_ktp,pel_seri,pel_meteran,pel_aktif,pel_id_user) VALUES (:pel_id_gol, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif, :pel_id_user)";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id_gol", $golongan);
            $stmt->bindParam(":pel_no", $no);
            $stmt->bindParam(":pel_nama", $nama);
            $stmt->bindParam(":pel_alamat", $alamat);
            $stmt->bindParam(":pel_hp", $hp);
            $stmt->bindParam(":pel_ktp", $ktp);
            $stmt->bindParam(":pel_seri", $seri);
            $stmt->bindParam(":pel_meteran", $meteran);
            $stmt->bindParam(":pel_aktif", $aktif);
            $stmt->bindParam(":pel_id_user", $user);
            $stmt->execute();
            return $this->selects($stmt);
      }
      public function edit($id){
            $sql = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();
            return $this->select($stmt);

      }
      public function update(){
            $pel_no = $_POST['pel_no'];
            $pel_nama = $_POST['pel_nama'];
            $pel_alamat = $_POST['pel_alamat'];
            $pel_hp = $_POST['pel_hp'];
            $pel_ktp = $_POST['pel_ktp'];
            $pel_seri = $_POST['pel_seri'];
            $pel_meteran = $_POST['pel_meteran'];
            $pel_aktif = $_POST['pel_aktif'];
            $pel_golongan = $_POST['pel_id_gol'];
            $pel_user = $_POST['pel_id_user'];
            $pel_id = $_POST['pel_id'];

            $sql = "UPDATE tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id_gol", $pel_golongan);
            $stmt->bindParam(":pel_no", $pel_no);
            $stmt->bindParam(":pel_nama", $pel_nama);
            $stmt->bindParam(":pel_alamat", $pel_alamat);
            $stmt->bindParam(":pel_hp", $pel_hp);
            $stmt->bindParam(":pel_ktp", $pel_ktp);
            $stmt->bindParam(":pel_seri", $pel_seri);
            $stmt->bindParam(":pel_meteran", $pel_meteran);
            $stmt->bindParam(":pel_aktif", $pel_aktif);
            $stmt->bindParam(":pel_id_user", $pel_user);
            $stmt->bindParam(":pel_id", $pel_id);
            $stmt->execute();

      }
      public function delete($id)
      {
            $query = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();
            return false;
      }
}
