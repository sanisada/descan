<?php

namespace App\Models;

use CodeIgniter\Model;

class sls_model extends Model{
   protected $table = 'sls';
   protected $primaryKey = 'sls_id';
   protected $allowedFields = ['data_id','kode_desa','kode_sls','nama_sls'];

   public function getSlsByDesaId($data_id)
   {
      // $array = array('data_id' => $data_id);
      return $this->where('data_id', $data_id)->findAll();
  }
}