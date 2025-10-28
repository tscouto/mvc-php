<?php
namespace App\controllers;

use App\core\Controller;



class NoticiasController extends Controller
{
    public function index()
    {
        $this->view('noticias/index');
    }

    public function noticia($id = []){
        $this->view("noticias/noticia", ['id' => $id]);
    }
}
