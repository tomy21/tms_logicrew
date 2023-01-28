<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CWarehouseList extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'warehouse',
            'submenu'   => 'list_warehouse',
            'link'      => 'CWarehouseList/index'
        ];
        return view('warehouse/index', $data);
    }
    public function modalTambah()
    {
        if ($this->request->isAJAX()) {
            $json = [
                'data' => view('warehouse/tambahWhModal'),
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
