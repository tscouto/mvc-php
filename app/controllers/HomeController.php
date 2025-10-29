<?php

namespace App\controllers;

use App\core\Controller;
use App\core\DataBase;
use App\models\Usuario;


class HomeController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        $data = $usuario->getUserData();
        $totalUsuarios = $usuario->getUsersCount();
        // dd($totalUsuarios);
        $userId = $usuario->getUserById(0);
        echo 'Usuario com ID 1' . var_dump($userId);
        $usuarios = $usuario->getAllUsers();
        dd($usuarios);
        echo 'total de usuarios ' .$totalUsuarios;
        echo 'Criando novo usuario.... <br>';
        $usuarioCriado =   $usuario->createUser('Tiago da Silva' . rand(1, 100));
        echo 'Usuario criado com sucesso ' . $usuarioCriado . '<br><br>';


        $this->view('home/index', $data);
    }
    public function  contact()
    {
        $this->view('home/contact');
    }
}
