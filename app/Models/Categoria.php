<?php

namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model
{
    protected $table            = 'fastquizdatabase_categoria';
    protected $primaryKey       = 'id_categoria';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function getCategorias() {
        $query = $this->db->table('fastquizdatabase_categoria')
                            ->select('*')
                            ->orderby('desc_categoria', 'ASC')
                            ->get();

        return $query->getResult();
    }
}
