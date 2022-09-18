<?php

class About extends Controller
{

    public function index($nama = 'Aditya Kesuma', $profesi = 'Mahasiswa', $umur = '22')
    {
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['umur'] = $umur;
        $data['judul'] = "About";
        // untuk mengirim data tambahkan parameter tambahan
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        echo "ini adalah Controller About Method Page";
    }
}