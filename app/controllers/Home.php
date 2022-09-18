<?php

// nantinya akan extend ke kelas core
class Home extends Controller
{

    public function index()
    {
        $data['judul'] = "Home";
        $this->view('templates/header', $data);
        // artinya memanggil file didalam folder view di folder home dan filenya index.php
        $this->view('home/index');
        $this->view('templates/footer');
    }
}