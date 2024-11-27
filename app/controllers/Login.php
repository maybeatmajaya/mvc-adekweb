<?php

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        // $data['nama'] = $this->models('User_model')->getUser();
        $this->view('template/header', $data); 
        $this->view('login/index');
        $this->view('template/footer');
    }
}