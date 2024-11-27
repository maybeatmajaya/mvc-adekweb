<?php

class Fitur extends Controller {
    public function index() {
        $data['judul'] = 'Fitur Kami';
        $data['fitur'] = $this->models('Fitur_model')->getAllFitur();
        $this->view('template/header', $data);
        $this->view('fitur/index', $data);
        $this->view('template/footer');
    }
}