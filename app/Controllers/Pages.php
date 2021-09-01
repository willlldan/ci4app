<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | WildCode',
            'test' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {

        $data = [
            'title' => 'About me | WildCode'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | WildCode',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jalan cemara no 5',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jalan Cipaku Indah no 51',
                    'kota' => 'Bandung'
                ],
            ]
        ];

        return view('pages/contact', $data);
    }
}
