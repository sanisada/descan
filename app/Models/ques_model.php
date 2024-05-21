<?php

namespace App\Models;

use CodeIgniter\Model;

class ques_model extends Model{
   protected $table = 'ques';
   protected $primaryKey = 'ques_id';
   protected $allowedFields = ['dataKey','label'];
}