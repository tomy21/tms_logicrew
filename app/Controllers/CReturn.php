<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CReturn extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'return',
            'submenu'   => 'Return',
            'link'      => 'CReturn/index'
        ];
        return view('Return/index', $data);
    }
}
