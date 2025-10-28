<?php
namespace App\controllers;
use App\core\Controller;
use App\models\Usuario;


class HomeController extends Controller
{
    public function index()
    {
       $usuario = new Usuario();
       $data = $usuario->getUserData();

        $this->view('home/index',$data);
    }
    public function  contact() {
        $this->view('home/contact');
    }
}

