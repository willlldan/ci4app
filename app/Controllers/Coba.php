<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini controller Coba method index";
    }

    public function about($nama = '', $umur = 0)
    {
        echo "Hello nama saya $nama saya berumur $umur";
    }
}
