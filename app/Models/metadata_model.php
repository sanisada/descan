<?php

namespace App\Models;

use CodeIgniter\Model;

class metadata_model extends Model
{
   protected $table = 'metadata';
   protected $primaryKey = 'metadata_id';
   protected $allowedFields = ['dataKey','label', 'definisi'];

   function getAll(){
        $builder = $this->db->table('metadata');
        $query = $builder->get();
        return $query->getResult();
        // $result = json_decode($query, true);
        // return $result;
    }

    public function search($keyword)
    {
        return $this->table($this->table)
                    ->like('dataKey', $keyword)
                    ->orLike('label', $keyword)
                    ->orLike('definisi', $keyword);
    }
}
