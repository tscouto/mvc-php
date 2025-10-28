<?php
class HttpErrorController extends Controller 

{
    public function NotFound()
    {
        http_response_code(404);
        $this->view('errors/404');
    }
    public function InternalServerError(){
        http_response_code(500);
        $this->view('errors/500');
    }
    public function Aunauthorized(){
        http_response_code(403);
        $this->view('errors/403');
    }
}