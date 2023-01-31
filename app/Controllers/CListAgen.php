<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MAgen;
use Config\Services;

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
            $request = Services::request();
            $modalAgen = new MAgen($request);
            $data = [
                'idAgen' => $modalAgen->idAgen(),
            ];
            $json = [
                'data' => view('Agen/tambahAgenModal',$data),
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
    public function dataAjax()
    {
        $request = Services::request();
        $datatable = new MAgen($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $button = "
                        <button class=\"btn btn-sm btn-info\" onclick=\"location.href=('<?= site_url() ?>CReturn/createOutbound')\"><i class=\"fa fa-edit\"></i></button>
                        <button class=\"btn btn-sm btn-danger\" onclick=\"location.href=('<?= site_url() ?>CReturn/historyReturn')\"><i class=\"fa fa-trash-alt\"></i></button>
                    ";
                $status = $list->status == 1 ? "<span class=\"badge text-bg-success\">Active</span>" : "<span class=\"badge text-bg-danger\">Not Active</span>";
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->nama_agen;
                $row[] = $list->alamat_agen;
                $row[] = $list->phone;
                $row[] = $list->email;
                $row[] = $list->owner_name;
                $row[] = '10000000';
                $row[] = '100000';
                $row[] = $status;
                $row[] = $button;
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
    public function addAgen()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('idAgen');
            $name = $this->request->getPost('nameAgen');
            $address = $this->request->getPost('address');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $long = $this->request->getPost('long');
            $lat = $this->request->getPost('lat');
            $owner = $this->request->getPost('owner');

            $request = Services::request();
            $modelAgen = new MAgen($request);
            $cekId = $modelAgen->getWhere(['code_agen' => $id])->getResult();
            $findId = $modelAgen->find($id);

            

            if ($findId > 0) {
                $json = [
                    'error' => 'Agen sudah pernah terdaftar'
                ];
            } else {
                $modelAgen->insert([
                    'code_agen'     => $id,
                    'nama_agen'     => $name,
                    'alamat_agen'   => $address,
                    'email'         => $email,
                    'phone'         => $phone,
                    'longitude'     => $long,
                    'latitude'      => $lat,
                    'owner_name'    => $owner,
                    'status'        => 1,
                ]);

                $json = [
                    'success'       => 'Agen berhasil ditambah'
                ];
            }
            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }
}
