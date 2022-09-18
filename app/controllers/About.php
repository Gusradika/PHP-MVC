<?php

class About
{

    public function index($nama = "Aditya", $profesi = "Kesuma")
    {
        echo "Halo nama saya adalah $nama saya adalah seorang $profesi";
    }
    public function page()
    {
        echo "ini adalah Controller About Method Page";
    }
}