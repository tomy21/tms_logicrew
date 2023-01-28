<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
            $json = [
                'data' => view('Seller/tambahSellerModal'),
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
