<?php
namespace App\controllers\errors;

use App\core\Controller;

class HttpErrorController extends Controller

{
    public function NotFound()
    {
        http_response_code(404);
        $this->view('errors/404');
    }
    public function internalServerError()
    {
        http_response_code(500);
        $this->view('errors/500');
    }
    public function Aunauthorized()
    {
        http_response_code(403);
        $this->view('errors/403');
    }
}
