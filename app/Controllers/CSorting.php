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
        return view('Sorting/index', $data);
    }
    public function tableSorting()
    {
        if ($this->request->isAJAX()) {
            $noAwb = $this->request->getPost('noAwb');

            $json = [
                'data' => view('Sorting/tableSorting')
            ];
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
