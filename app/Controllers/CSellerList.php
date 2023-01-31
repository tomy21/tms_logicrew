<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MCustomer;
use Config\Services;

class CSellerList extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'seller',
            'submenu'   => 'list_seller',
            'link'      => 'CSellerList/index'
        ];
        return view('Seller/index',$data);
    }
    public function modalTambah()
    {
        if ($this->request->isAJAX()) {
            $request = Services::request();
            $modalAgen = new MCustomer($request);
            $data = [
                'idSeller' => $modalAgen->idSeller(),
                'validation' => \Config\Services::validation(),
            ];
            $json = [
                'data' => view('Seller/tambahSellerModal',$data),
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
