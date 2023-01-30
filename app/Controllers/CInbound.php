<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CInbound extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'inbound',
            'submenu'   => 'Inbound',
            'link'      => 'CInbound/index'
        ];
        return view('Inbound/index', $data);
    }
    public function tableInbound(){
        if ($this->request->isAJAX()) {
            $noAwb = $this->request->getPost('noAwb');
            
            $json = [
                'data' => view('Inbound/tableList')
            ];
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
