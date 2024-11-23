<?php

class About extends Controller {
    public function index($nama = 'Jaya', $akun = 'Email', $password = 32)
    {
        $data['nama'] = $nama;
        $data['akun'] = $akun;
        $data['password'] = $password;
        $data['judul'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('home/index' , $data);
        $this->view('template/footer');
        $this->view('about/index', $data);  
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}