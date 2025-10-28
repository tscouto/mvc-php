<?php
namespace App\models;
class Usuario
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
}
