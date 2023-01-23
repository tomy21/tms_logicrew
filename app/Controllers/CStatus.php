<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MTransaksi;
use Config\Services;

class CStatus extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'status',
            'submenu' => 'index',
            'link'      => 'CStatus/index'
        ];

        return view('Transaksi/status', $data);
    }

    public function dataAjax()
    {
        $request = Services::request();
        $datatable = new MTransaksi($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $tglManifest = strtotime($list->update_resi);
                $tglPOD = strtotime($list->created_at);
                $sla    = $tglPOD - $tglManifest;

                $print =  "H+" . floor($sla / 60 / 60 / 24);

                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->inv;
                $row[] = $list->no_resi;
                $row[] = $list->service;
                $row[] = $list->warehouse;
                $row[] = $list->ekspedisi;
                $row[] = $list->agen;
                $row[] = $list->status_pod;
                $row[] = $list->status_hub;
                $row[] = $list->ongkir;
                $row[] = $list->update_resi;
                $row[] = $list->created_at;
                $row[] = $list->update_resi == "" ? '-' : $print;
                $data[] = $row;
            }

            $output = [
                'draw' => isset($_POST['draw']) ? intval($_POST['draw']) : 0,
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
        
    }
}
