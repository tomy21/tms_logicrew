<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CSorting extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'sorting',
            'submenu'   => 'Sorting',
            'link'      => 'CSorting/index'
        ];
        return view('Analytics/index', $data);
    }
}
