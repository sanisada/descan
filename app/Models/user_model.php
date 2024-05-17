<?php

namespace App\Models;

use CodeIgniter\Model;

class user_model extends Model{
   protected $table = 'users';
   protected $primaryKey = 'user_id';
   protected $allowedFields = ['user_username','user_name','user_email','user_password','user_role'];
}