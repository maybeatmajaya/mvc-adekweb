<?php

class Register extends Controller {
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('template/header', $data);
        $this->view('register/index', $data);
        $this->view('template/footer');
    }
    // public function page()
    // {
    //     echo 'Register/page';
    // }
}