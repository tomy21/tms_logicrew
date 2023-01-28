<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class COutbound extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'outbound',
            'submenu'   => 'Outbound',
            'link'      => 'COutbound/index'
        ];
        return view('Outbound/index', $data);
    }
}
