<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MCustomer;
use Config\Services;

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
            $request = Services::request();
            $modalAgen = new MCustomer($request);
            $data = [
                'idWH' => $modalAgen->idWarehouse(),
                'validation' => \Config\Services::validation(),
            ];
            $json = [
                'data' => view('warehouse/tambahWhModal',$data),
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
