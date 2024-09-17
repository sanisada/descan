<?php

namespace App\Models;

use CodeIgniter\Model;

class data2_model extends Model{
   protected $table = 'data2';
   protected $primaryKey = 'id';
   protected $allowedFields = [
      'data_id',
      'R601AK2',
      'R601AK3',
      'R601AK4',
      'R601AK5',
      'R601BK2',
      'R601BK3',
      'R601BK4',
      'R601BK5',
      'R601CK2',
      'R601CK3',
      'R601CK4',
      'R601CK5',
      'R601DK2',
      'R601DK3',
      'R601DK4',
      'R601DK5',
      'R601EK2',
      'R601EK3',
      'R601EK4',
      'R601EK5',
      'R601FK2',
      'R601FK3',
      'R601FK4',
      'R601FK5',
      'R601GK2',
      'R601GK3',
      'R601GK4',
      'R601GK5',
      'R601HK2',
      'R601HK3',
      'R601HK4',
      'R601HK5',
      'R601IK2',
      'R601IK3',
      'R601IK4',
      'R601IK5',
      'R601JK2',
      'R601JK3',
      'R601JK4',
      'R601JK5',
      'R601KK2',
      'R601KK3',
      'R601KK4',
      'R601KK5',
      'R601LK2',
      'R601LK3',
      'R601MK2',
      'R601MK3',
      'R601NK2',
      'R601NK3',
      'R601OK2',
      'R601OK3',
      'R601PK3',
      'R601QK3',
      'R601R',
      'R602A',
      'R602B',
      'R602C',
      'R603A',
      'R603B',
      'R603C',
      'R603D',
      'R603E',
      'R603F',
      'R603G',
      'R604AK2',
      'R604BK2',
      'R604CK2',
      'R604DK2',
      'R604EK2',
      'R604FK2',
      'R604GK2',
      'R604HK2',
      'R604IK2',
      'R604JK2',
      'R604KK2',
      'R604LK2',
      'R604MK2',
      'R605A',
      'R605B',
      'R605C',
      'R605D',
      'R605E',
      'R606A1',
      'R606A1S',
      'R606A2',
      'R606A2S',
      'R606B',
      'R606BS',
      'R606C',
      'R606CS',
      'R606D',
      'R606DS',
      'R607',
      'R608',
      'R609',
      'R610',
      'R611AK2',
      'R611AK3',
      'R611AK4',
      'R611BK2',
      'R611BK3',
      'R611BK4',
      'R611CK2',
      'R611CK3',
      'R611CK4',
      'R611DK2',
      'R611DK3',
      'R611DK4',
      'R611EK2',
      'R611EK3',
      'R611EK4',
      'R611FK2',
      'R611FK3',
      'R611FK4',
      'R611GK2',
      'R611GK3',
      'R611GK4',
      'R611HK2',
      'R611HK3',
      'R611HK4',
      'R611IK2',
      'R611IK3',
      'R611IK4',
      'R611JK2',
      'R611JK3',
      'R611JK4',
      'R701_1',
      'R701_2',
      'R701_3',
      'R701_4',
      'R701_5',
      'R701_6',
      'R701_7',
      'R702',
      'R703A',
      'R703B',
      'R703C',
      'R703D',
      'R703E',
      'R703F',
      'R703G',
      'R703H',
      'R703I',
      'R703J',
      'R704A',
      'R704B',
      'R705A',
      'R705B',
      'R705C',
      'R705D',
      'R705E',
      'R705F',
      'R705G',
      'R705H',
      'R705I',
      'R706',
      'R707',
      'R707S',
      'R708A',
      'R708AS',
      'R708B',
      'R708BS',
      'R708C',
      'R708CS',
      'R708D',
      'R708DS',
      'R708E',
      'R708ES',
      'R708F',
      'R708FS',
      'R801AK2',
      'R801AK3',
      'R801AK4',
      'R801BK2',
      'R801BK3',
      'R801BK4',
      'R801CK2',
      'R801CK3',
      'R801CK4',
      'R801DK2',
      'R801DK3',
      'R801DK4',
      'R801EK2',
      'R801EK3',
      'R801EK4',
      'R801FK2',
      'R801FK3',
      'R801FK4',
      'R801GK2',
      'R801GK3',
      'R801GK4',
      'R801HK2',
      'R801HK3',
      'R801HK4',
      'R801IK2',
      'R801IK3',
      'R801IK4',
      'R801JK2',
      'R801JK3',
      'R801JK4',
      'R801KK2',
      'R801KK3',
      'R801KK4',
      'R801LK2',
      'R801LK3',
      'R801LK4',
      'R802',
      'R803',
      'R901A1',
      'R901A2',
      'R901B',
      'R901C',
      'R1001A',
      'R1001B',
      'R1001C',
      'R1001D',
      'R1001E',
      'R1001F',
      'R1001G',
      'R1001H',
      'R1001I',
      'R1001J',
      'R1001K',
      'R1001L',
      'R1001M',
      'R1001N',
      'R1001O',
      'R1001P',
      'R1002',
      'R1003',
      'R1004A1',
      'R1004A2',
      'R1004A3',
      'R1005A1',
      'R1005A2',
      'R1005A3',
      'R1005A4',
      'R1006AK2',
      'R1006AK3',
      'R1006AK4',
      'R1006BK2',
      'R1006BK3',
      'R1006BK4',
      'R1006CK2',
      'R1006CK3',
      'R1006CK4',
      'R1006DK2',
      'R1006DK3',
      'R1006DK4',
      'R1006EK2',
      'R1006EK3',
      'R1006EK4',
      'R1006FK2',
      'R1006FK3',
      'R1006FK4',
      'R1006GK2',
      'R1006GK3',
      'R1006GK4',
      'R1006HK2',
      'R1006HK3',
      'R1006HK4',
      'R1006IK2',
      'R1006IK3',
      'R1006IK4',
      'R1007AK2',
      'R1007AK3',
      'R1007AK4',
      'R1007BK2',
      'R1007BK3',
      'R1007BK4',
      'R1007CK2',
      'R1007CK3',
      'R1007CK4',
      'R1007DK2',
      'R1007DK3',
      'R1007DK4',
      'R1007EK2',
      'R1007EK3',
      'R1007EK4',
      'R1007FK2',
      'R1007FK3',
      'R1007FK4',
      'R1007GK2',
      'R1007GK3',
      'R1007GK4',
      'R1007HK2',
      'R1007HK3',
      'R1007HK4',
      'R1007IK2',
      'R1007IK3',
      'R1007IK4',
      'R1007JK2',
      'R1007JK3',
      'R1007JK4',
      'R110101K3',
      'R110101K4',
      'R110102K3',
      'R110102K4',
      'R110103K3',
      'R110103K4',
      'R110104K3',
      'R110104K4',
      'R110105K3',
      'R110105K4',
      'R110106K3',
      'R110106K4',
      'R110107K3',
      'R110107K4',
      'R110108K3',
      'R110108K4',
      'R110109K3',
      'R110109K4',
      'R110110K3',
      'R110110K4',
      'R110111K3',
      'R110111K4',
      'R1102',
      'R1103',
      'R1103S',
      'R1104AK2',
      'R1104AK3',
      'R1104BK2',
      'R1104BK3',
      'R1201A',
      'R1201B',
      'R1201C',
      'R1201D',
      'R1201E',
      'R1201F',
      'R1201G',
      'R1201H',
      'R1201I',
      'R1202A1',
      'R1202B',
      'R1202C',
      'R1202D',
      'R1203A',
      'R1203B',
      'R1204',
      'R1204S',
      'R1205A',
      'R1205AS',
      'R1205B',
      'R1301AK2',
      'R1301AK3',
      'R1301AK4',
      'R1301AK5',
      'R1301BK2',
      'R1301BK3',
      'R1301BK4',
      'R1301BK5',
      'R1301CK2',
      'R1301CK3',
      'R1301CK4',
      'R1301CK5',
      'R1302_1',
      'R1302_1A',
      'R1302_1B',
      'R1302_1C',
      'R1302_1D',
      'R1302_2',
      'R1302_3',
      'R1302_4',
      'R1302_5',
      'R1302_6',
      'R1302_7',
      'R1302_8',
      'R1302_9',
      'R1302_10',
      'R1302_11',
      'R1303A',
      'R1303B',
      'R1303C',
      'R1304A',
      'R1304B',
      'R1304C',
      'R1401AK2',
      'R1401AK2S',
      'R1401AK3',
      'R1401AK4',
      'R1401AK5',
      'R1401AK6',
      'R1401BK2',
      'R1401BK2S',
      'R1401BK3',
      'R1401BK4',
      'R1401BK5',
      'R1401AK6',
      'R1402A',
      'R1402A1',
      'R1402B',
      'R1402B1',
      'R1402C',
      'R1402C1',
      'R1402D',
      'R1402D1',
      'R1403',
      'R1404A',
      'R1404B',
      'R1404C',
      'R1404D',
      'R601AK2S',
      'R601AK3S',
      'R601BK2S',
      'R601BK3S',
      'R601CK2S',
      'R601CK3S',
      'R601DK2S',
      'R601DK3S',
      'R601EK2S',
      'R601EK3S',
      'R601FK2S',
      'R601FK3S',
      'R601GK2S',
      'R601GK3S',
      'R601HK2S',
      'R601HK3S',
      'R601IK2S',
      'R601IK3S',
      'R601JK2S',
      'R601JK3S',
      'R601KK2S',
      'R601KK3S',
      'R601LK2S',
      'R601LK3S',
      'R601MK2S',
      'R601MK3S',
      'R601NK2S',
      'R601NK3S',
      'R601OK2S',
      'R601OK3S',
      'R601PK3S',
      'R601QK3S',
      'R604AK2S',
      'R604BK2S',
      'R604CK2S',
      'R604DK2S',
      'R604EK2S',
      'R604FK2S',
      'R604GK2S',
      'R604HK2S',
      'R604IK2S',
      'R604JK2S',
      'R604KK2S',
      'R604LK2S',
      'R604MK2S',
      'R803S',
      'R1001PS',
      'R1005A4S',
      'R1006AK2S',
      'R1006BK2S',
      'R1006CK2S',
      'R1006DK2S',
      'R1006EK2S',
      'R1006FK2S',
      'R1006GK2S',
      'R1006HK2S',
      'R1006IK2S'
   ];

   public function updateByDataId($data_id, $data): bool
   {
      // Find the primary key id based on data_id
      $record = $this->where('data_id', $data_id)->first();
      if (!$record) {
         return false; // No record found to update
      }

      // Use the primary key id to update the record
      return $this->update($record['id'], $data);
   }

   public function getmasjidbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703A AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }
  }

   public function getsuraubypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703B AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getkristenbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703C AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }
   }

   public function getkatolikbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703D AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getkapelbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703E AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getpurabypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703F AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getwiharabypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703G AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getkelentengbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703H AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getbasarahbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703I AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getlainnyabypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R703J AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function gethansipbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R1102 AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getpolisibypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R1103 AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getthpilkadesbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R1404B AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getcalonpilkadesbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R1404C AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getsuarapilkadesbypekon($region, $tahun) {
      // SQL query to join data and data2 tables based on the foreign key data_id
      // and applying the conditions on the data table
      $query = $this->db->query("
         SELECT data2.R1404D AS total
         FROM data 
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
         $result = $query->getRow();
      if ($result) {
         return $result->total; // Mengembalikan nilai total dari hasil kueri
      } else {
         return 0; // Jika tidak ada hasil, kembalikan nilai 0
      }  
   }

   public function getsarpendbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R601AK2 AS count_a, data2.R601BK2 AS count_b, data2.R601CK2 AS count_c,
            data2.R601DK2 AS count_d, data2.R601EK2 AS count_e, data2.R601FK2 AS count_f,
            data2.R601GK2 AS count_g, data2.R601HK2 AS count_h, data2.R601IK2 AS count_i,
            data2.R601JK2 AS count_j, data2.R601KK2 AS count_k, data2.R601LK2 AS count_l,
            data2.R601MK2 AS count_m, data2.R601NK2 AS count_n, data2.R601OK2 AS count_o
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k,
            'count_l' => $result->count_l,
            'count_m' => $result->count_m,
            'count_n' => $result->count_n,
            'count_o' => $result->count_o
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0,
            'count_l' => 0,
            'count_m' => 0,
            'count_n' => 0,
            'count_o' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getsarpendswastabypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R601AK3 AS count_a, data2.R601BK3 AS count_b, data2.R601CK3 AS count_c,
            data2.R601DK3 AS count_d, data2.R601EK3 AS count_e, data2.R601FK3 AS count_f,
            data2.R601GK3 AS count_g, data2.R601HK3 AS count_h, data2.R601IK3 AS count_i,
            data2.R601JK3 AS count_j, data2.R601KK3 AS count_k, data2.R601LK3 AS count_l,
            data2.R601MK3 AS count_m, data2.R601NK3 AS count_n, data2.R601OK3 AS count_o,
            data2.R601PK3 AS count_p, data2.R601QK3 AS count_q
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k,
            'count_l' => $result->count_l,
            'count_m' => $result->count_m,
            'count_n' => $result->count_n,
            'count_o' => $result->count_o,
            'count_p' => $result->count_p,
            'count_q' => $result->count_q
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0,
            'count_l' => 0,
            'count_m' => 0,
            'count_n' => 0,
            'count_o' => 0,
            'count_p' => 0,
            'count_q' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getjaraksarpendbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R601AK4 AS count_a, data2.R601BK4 AS count_b, data2.R601CK4 AS count_c,
            data2.R601DK4 AS count_d, data2.R601EK4 AS count_e, data2.R601FK4 AS count_f,
            data2.R601GK4 AS count_g, data2.R601HK4 AS count_h, data2.R601IK4 AS count_i,
            data2.R601JK4 AS count_j, data2.R601KK4 AS count_k
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getkemudahansarpendbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R601AK5 AS count_a, data2.R601BK5 AS count_b, data2.R601CK5 AS count_c,
            data2.R601DK5 AS count_d, data2.R601EK5 AS count_e, data2.R601FK5 AS count_f,
            data2.R601GK5 AS count_g, data2.R601HK5 AS count_h, data2.R601IK5 AS count_i,
            data2.R601JK5 AS count_j, data2.R601KK5 AS count_k
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getsarkesbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R604AK2 AS count_a, data2.R604BK2 AS count_b, data2.R604CK2 AS count_c, data2.R604DK2 AS count_d,
               data2.R604EK2 AS count_e, data2.R604FK2 AS count_f, data2.R604GK2 AS count_g, data2.R604HK2 AS count_h,
               data2.R604IK2 AS count_i, data2.R604JK2 AS count_j, data2.R604KK2 AS count_k, data2.R604LK2 AS count_l, data2.R604MK2 AS count_m
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k,
            'count_l' => $result->count_l,
            'count_m' => $result->count_m
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0,
            'count_l' => 0,
            'count_m' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getnamasarkesbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R604AK2S AS count_a, data2.R604BK2S AS count_b, data2.R604CK2S AS count_c, data2.R604DK2S AS count_d,
               data2.R604EK2S AS count_e, data2.R604FK2S AS count_f, data2.R604GK2S AS count_g, data2.R604HK2S AS count_h,
               data2.R604IK2S AS count_i, data2.R604JK2S AS count_j, data2.R604KK2S AS count_k, data2.R604LK2S AS count_l, data2.R604MK2S AS count_m
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k,
            'count_l' => $result->count_l,
            'count_m' => $result->count_m
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => '-',
            'count_b' => '-',
            'count_c' => '-',
            'count_d' => '-',
            'count_e' => '-',
            'count_f' => '-',
            'count_g' => '-',
            'count_h' => '-',
            'count_i' => '-',
            'count_j' => '-',
            'count_k' => '-',
            'count_l' => '-',
            'count_m' => '-'
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getbankbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R1004A1 AS count_a, data2.R1004A2 AS count_b, data2.R1004A3 AS count_c
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getkoperasibypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R1005A1 AS count_a, data2.R1005A2 AS count_b, data2.R1005A3 AS count_c, data2.R1005A4 AS count_d
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getsarpekbypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R1006AK2 AS count_a, data2.R1006BK2 AS count_b, data2.R1006CK2 AS count_c, data2.R1006DK2 AS count_d,
               data2.R1006EK2 AS count_e, data2.R1006FK2 AS count_f, data2.R1006GK2 AS count_g, data2.R1006HK2 AS count_h,
               data2.R1006IK2 AS count_i
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getsarprasebypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R1007AK2 AS count_a, data2.R1007BK2 AS count_b, data2.R1007CK2 AS count_c, data2.R1007DK2 AS count_d,
               data2.R1007EK2 AS count_e, data2.R1007FK2 AS count_f, data2.R1007GK2 AS count_g, data2.R1007HK2 AS count_h,
               data2.R1007IK2 AS count_i, data2.R1007JK2 AS count_j
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getolahragabypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R801AK2 AS count_a, data2.R801BK2 AS count_b, data2.R801CK2 AS count_c, data2.R801DK2 AS count_d,
               data2.R801EK2 AS count_e, data2.R801FK2 AS count_f, data2.R801GK2 AS count_g, data2.R801HK2 AS count_h,
               data2.R801IK2 AS count_i, data2.R801JK2 AS count_j, data2.R801KK2 AS count_k, data2.R801LK2 AS count_l
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k,
            'count_l' => $result->count_l
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0,
            'count_l' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }

   public function getkomunitasolahragabypekon($region, $tahun) {
      // Execute the query to get the values from the specified columns
      $query = $this->db->query("
         SELECT data2.R801AK3 AS count_a, data2.R801BK3 AS count_b, data2.R801CK3 AS count_c, data2.R801DK3 AS count_d,
               data2.R801EK3 AS count_e, data2.R801FK3 AS count_f, data2.R801GK3 AS count_g, data2.R801HK3 AS count_h,
               data2.R801IK3 AS count_i, data2.R801JK3 AS count_j, data2.R801KK3 AS count_k, data2.R801LK3 AS count_l
         FROM data
         JOIN data2 ON data.data_id = data2.data_id 
         WHERE data.R104 = ? AND data.Tahun = ?", array($region, $tahun));
      
      // Fetch the result row
      $result = $query->getRow();
      
      // Initialize an empty array to store column values
      $columns = [];

      // Check if the result is valid
      if ($result) {
         // Populate the array with column values
         $columns = [
            'count_a' => $result->count_a,
            'count_b' => $result->count_b,
            'count_c' => $result->count_c,
            'count_d' => $result->count_d,
            'count_e' => $result->count_e,
            'count_f' => $result->count_f,
            'count_g' => $result->count_g,
            'count_h' => $result->count_h,
            'count_i' => $result->count_i,
            'count_j' => $result->count_j,
            'count_k' => $result->count_k,
            'count_l' => $result->count_l
         ];
      } else {
         // If no result, return an empty array
         $columns = [
            'count_a' => 0,
            'count_b' => 0,
            'count_c' => 0,
            'count_d' => 0,
            'count_e' => 0,
            'count_f' => 0,
            'count_g' => 0,
            'count_h' => 0,
            'count_i' => 0,
            'count_j' => 0,
            'count_k' => 0,
            'count_l' => 0
         ];
      }

      // Return the array of column values
      return $columns;
   }
  
  
}