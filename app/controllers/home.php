<?php

class Home extends Controller
{
    // a estos métodos se les suele llamar acciones o metodos de accion
    public function index($name = '')
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }

    public function users()
    {
        $this->view('users');
    }

    public function chat()
    {
        $this->view('chat');
    }
}
