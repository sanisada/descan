<?php

namespace App\Models;

use CodeIgniter\Model;

class user_model extends Model{
   protected $table = 'users';
   protected $primaryKey = 'user_id';
   protected $allowedFields = ['user_username','user_name','user_email','user_password','user_role','kecamatan','desa'];

   function getAll(){
      $builder = $this->db->table('users u');
      $builder->join('desa ds', 'ds.kode_desa = u.desa');
      $query = $builder->get();
      return $query->getResult();
      // $result = json_decode($query, true);
      // return $result;
   }
}