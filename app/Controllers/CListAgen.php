<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CListAgen extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'agen',
            'submenu'   => 'List_agen',
            'link'      => 'CListAgen/index'
        ];
        return view('Agen/index', $data);
    }
    public function modalTambah()
    {
        if ($this->request->isAJAX()) {
            $json = [
                'data' => view('Agen/tambahAgenModal'),
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
