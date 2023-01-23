<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'dashboard',
            'link' => 'Home/index',
            'submenu' => 'dashboard'
        ];

        return view('layout/dashboard',$data);
    }
}
