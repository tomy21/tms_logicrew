<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CReturn extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'return',
            'submenu'   => 'Return',
            'link'      => 'CReturn/index'
        ];
        return view('Return/index', $data);
    }
    public function createOutbound(){
        $data = [
            'menu'      => 'return',
            'submenu'   => 'OutboundReturn',
            'link'      => 'CReturn/index'
        ];
        return view("Return/outboundReturn", $data);
    }
    public function historyReturn(){
        $data = [
            'menu'      => 'return',
            'submenu'   => 'History',
            'link'      => 'CReturn/index'
        ];
        return view("Return/historyReturn", $data);
    }
    public function tableReturn()
    {
        if ($this->request->isAJAX()) {
            $noAwb = $this->request->getPost('noAwb');

            $json = [
                'data' => view('Return/tableReturn')
            ];
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
