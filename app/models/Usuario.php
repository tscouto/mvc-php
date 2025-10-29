<?php

namespace App\models;

use App\core\Model;

class Usuario extends Model
{
    public function getUserData()
    {
        return
            [
                'nome' => 'Tiago da Silva Couto',
                'idade' => 35,
                'email' => 'tiago.dscouto@hotmail.com'
            ];
    }

    public function createUser($name)
    {
        $sql = "INSERT INTO usuarios (nome) VALUES (:name)";
        $params = ['name' => $name];
        return $this->db->execute($sql, $params);
    }
    public function getAllUsers()
    {
        $sql = "SELECT * FROM usuarios";
        return $this->db->fetchAll($sql);
    }
    public function getUserById($id)
    {

        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $params = ['id' => $id];
        return $this->db->fetch($sql, $params);
    }
    public function getUsersCount() {
      return $this->db->fetch('SELECT COUNT(*) as count FROM usuarios')['count'];
    }
}
