<?php
require_once __DIR__ . '/../core/Controller.php';

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
