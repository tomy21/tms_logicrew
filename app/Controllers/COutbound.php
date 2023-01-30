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
    public function tableOutbound()
    {
        if ($this->request->isAJAX()) {
            $noAwb = $this->request->getPost('noAwb');

            $json = [
                'data' => view('Outbound/tableOutbound')
            ];
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
