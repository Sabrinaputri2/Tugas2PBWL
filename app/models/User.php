<?php

namespace App\Models;

use App\Core\Model;

class user extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function input()
      {
            $query = "INSERT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function delete($id)
      {
            $query = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
            return false;
      }
      public function simpan()
      {
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];
            $nama = $_POST['user_nama'];
            $alamat = $_POST['user_alamat'];
            $hp = $_POST['user_hp'];
            $pos = $_POST['user_pos'];
            $role = $_POST['user_role'];
            $aktif = $_POST['user_aktif'];

            $sql = "INSERT INTO tb_users (user_email,user_password,user_nama,user_alamat,user_hp,user_pos,user_role,user_aktif) VALUES (:user_email, :user_password, :user_nama, :user_alamat, :user_hp, :user_pos, :user_role, :user_aktif)";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_nama", $nama);
            $stmt->bindParam(":user_alamat", $alamat);
            $stmt->bindParam(":user_hp", $hp);
            $stmt->bindParam(":user_pos", $pos);
            $stmt->bindParam(":user_role", $role);
            $stmt->bindParam(":user_aktif", $aktif);
            $stmt->execute();
            return $this->selects($stmt);
      }
      public function edit($id){
            $sql = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
            return $this->select($stmt);

      }
      public function update(){
            $user_nama = $_POST['user_nama'];
            $user_password = $_POST['user_password'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_email = $_POST['user_email'];
            $user_pos = $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $user_aktif = $_POST['user_aktif'];
            $user_id = $_POST['user_id'];

            $sql = "UPDATE tb_users SET user_email=:user_email, user_password=:user_password, user_nama=:user_nama, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, user_aktif=:user_aktif WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":user_hp", $user_hp);
            $stmt->bindParam(":user_pos", $user_pos);
            $stmt->bindParam(":user_role", $user_role);
            $stmt->bindParam(":user_aktif", $user_aktif);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->execute();

      }
}
