<?php

namespace App\Models;

use CodeIgniter\Model;

class kec_model extends Model{
   protected $table = 'kec';
   protected $primaryKey = 'kec_id';
   protected $allowedFields = ['kode_kec','kecamatan'];
}