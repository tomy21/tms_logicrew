<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CInbound extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'inbound',
            'submenu'   => 'Inbound',
            'link'      => 'CInbound/index'
        ];
        return view('Inbound/index', $data);
    }
}
