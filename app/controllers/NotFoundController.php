<?php
class NotFoundController extends Controller 

{
    public function index()
    {
        http_response_code(404);
        $this->view('404/404');
    }
}