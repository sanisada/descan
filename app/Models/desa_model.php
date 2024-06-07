<?php

namespace App\Models;

use CodeIgniter\Model;

class desa_model extends Model{
   protected $table = 'desa';
   protected $primaryKey = 'desa_id';
   protected $allowedFields = ['kode_kec','kode_desa','desa'];

   public function getDesaByKecamatan($kode_kec)
   {
      return $this->where('kode_kec', $kode_kec)->findAll();
  }
}