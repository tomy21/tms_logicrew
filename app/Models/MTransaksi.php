<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class MTransaksi extends Model
{
    protected $table            = 'tbl_transaksi';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['inv', 'no_resi', 'service', 'warehouse', 'ekspedisi', 'agen', 'cp_name', 'status_pod','desc','status_hub','ongkir','update_resi'];
    protected $useTimestamps    = true;
    protected $column_order     = array(null,'inv','service','warehouse', 'ekspedisi', 'no_resi', 'agen','status_pod',  'status_hub', 'ongkir', 'update_resi','created_at', null);
    protected $column_search    = array('inv','service','warehouse', 'ekspedisi', 'no_resi', 'agen','status_pod','status_hub','ongkir', 'created_at','update_resi');
    protected $order            = array('created_at' => 'desc');
    protected $request;
    protected $dt;
    protected $db;

    public function __construct(RequestInterface $request)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);
    }
    private function getDatatablesQuery()
    {
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->dt->groupStart();
                    $this->dt->like($item, $_POST['search']['value']);
                } else {
                    $this->dt->orLike($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->dt->groupEnd();
            }
            $i++;
        }
        if ($this->request->getPost('order')) {
            $this->dt->orderBy($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }

    public function getDatatables()
    {
        $this->getDatatablesQuery();
        if ($this->request->getPost('length') != -1)
        $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        $query = $this->dt->get();
        return $query->getResult();
    }

    public function countFiltered()
    {
        $this->getDatatablesQuery();
        return $this->dt->countAllResults();
    }

    public function countAll()
    {
        $tbl_storage = $this->db->table($this->table);
        return $tbl_storage->countAllResults();
    }
}
