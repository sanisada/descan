<?php

namespace App\Models;

use CodeIgniter\Model;

class data_model extends Model{
   protected $table = 'data';
   protected $primaryKey = 'data_id';
   protected $allowedFields = [
      'Tahun',
      'R101',
      'R102',
      'R103',
      'R104',
      'R106A',
      'R303D',
      'R304',
      'R307B1',
      'R307B1_LAT',
      'R307B1_LA0',
      'R307B1_LON',
      'R307B2',
      'R401',
      'R401A',
      'R401B',
      'R401C',
      'R401D',
      'R402B',
      'R402B1',
      'R402B2',
      'R402E',
      'R403A',
      'R403A1',
      'R403A2',
      'R403A3',
      'R403A4',
      'R403A5',
      'R403A6',
      'R403A7',
      'R403A8',
      'R403A9',
      'R403A10',
      'R403A11',
      'R403A12',
      'R403A13',
      'R403A14',
      'R403A15',
      'R403A16',
      'R403A17',
      'R403A18',
      'R403A19',
      'R403A20',
      'R403A21',
      'R403B1',
      'R403B2',
      'R501A1',
      'R501A2',
      'R501B',
      'R504C',
      'R504C1',
      'R509A',
      'R509B',
      'R509C1',
      'R509C1A',
      'R509C2',
      'R509C3',
      'R509AK2',
      'R509AK3',
      'R509AK4',
      'R509AK5',
      'R510B1K2',
      'R510B1K3',
      'R510B1K4',
      'R510B1K5',
      'R510B2K2',
      'R510B2K3',
      'R510B2K4',
      'R510B2K5',
      'R510B3K2',
      'R510B3K3',
      'R510B3K4',
      'R510B3K5',
      'R510B4K2',
      'R510B4K3',
      'R510B4K4',
      'R510B4K5',
      'R510B5K2',
      'R510B5K3',
      'R510B5K4',
      'R510B5K5',
      'R510B6K2',
      'R510B6K3',
      'R510B6K4',
      'R510B6K5',
      'R510B7K2',
      'R510B7K3',
      'R510B7K4',
      'R510B8K2',
      'R510B8K3',
      'R510B8K4',
      'R510B8K5',
      'R510B9K2',
      'R510B9K4',
      'R510B9K5',
      'R510B10K2',
      'R510B10K4',
      'R510B10K5',
      'R511A',
      'R511B1',
      'R511B2',
      'R511B3',
      'R513A',
      'R513B1',
      'R513B2',
      'R513B3',
      'R516',
      'R516A',
      'R518',
      'R518A',
      'R601AK2',
      'R601AK3',
      'R601AK4',
      'R601AK5',
      'R601AK6',
      'R601AK7',
      'R601AK8',
      'R601BK2',
      'R601BK3',
      'R601BK4',
      'R601BK5',
      'R601BK6',
      'R601BK7',
      'R601BK8',
      'R601CK2',
      'R601CK3',
      'R601CK4',
      'R601CK5',
      'R601CK6',
      'R601CK7',
      'R601CK8',
      'R601DK2',
      'R601DK3',
      'R601DK4',
      'R601DK5',
      'R601DK6',
      'R601DK7',
      'R601DK8',
      'R601EK2',
      'R601EK3',
      'R601EK4',
      'R601EK5',
      'R601EK6',
      'R601EK7',
      'R601EK8',
      'R601FK2',
      'R601FK3',
      'R601FK4',
      'R601FK5',
      'R601FK6',
      'R601FK7',
      'R601FK8',
      'R601GK2',
      'R601GK3',
      'R601GK4',
      'R601GK5',
      'R601GK6',
      'R601GK7',
      'R601GK8',
      'R601GK6',
      'R601HK2',
      'R601HK3',
      'R601HK4',
      'R601HK5',
      'R601HK6',
      'R601HK7',
      'R601HK8',
      'R601IK2',
      'R601IK3',
      'R601IK4',
      'R601IK5',
      'R601IK6',
      'R601IK7',
      'R601IK8',
      'R601JK2',
      'R601JK3',
      'R601JK4',
      'R601JK5',
      'R601JK6',
      'R601JK7',
      'R601JK8',
      'R601KK2',
      'R601KK3',
      'R601KK4',
      'R601KK5',
      'R601KK6',
      'R601KK7',
      'R601KK8',
      'R604A',
      'R604B',
      'R604C',
      'R604D',
      'R604E',
      'R605A',
      'R605B',
      'R605C',
      'R605D',
      'R605E',
      'R701AK2',
      'R701AK3',
      'R701AK4',
      'R701AK5',
      'R701BK2',
      'R701BK3',
      'R701BK4',
      'R701BK5',
      'R701CK2',
      'R701CK3',
      'R701CK4',
      'R701CK5',
      'R701DK2',
      'R701DK3',
      'R701DK4',
      'R701DK5',
      'R701EK2',
      'R701EK3',
      'R701EK4',
      'R701EK5',
      'R701FK2',
      'R701FK3',
      'R701FK4',
      'R701FK5',
      'R701GK2',
      'R701GK3',
      'R701GK4',
      'R701GK5',
      'R701HK2',
      'R701HK3',
      'R701HK4',
      'R701HK5',
      'R701IK2',
      'R701IK3',
      'R701IK4',
      'R701IK5',
      'R701JK2',
      'R701JK3',
      'R701JK4',
      'R701JK5',
      'R701KK2',
      'R701KK3',
      'R701KK4',
      'R701KK5',
      'R701LK2',
      'R701LK3',
      'R701MK2',
      'R701MK3',
      'R701NK2',
      'R701NK3',
      'R701OK2',
      'R701OK3',
      'R701PK3',
      'R701QK3',
      'R701R',
      'R702A',
      'R702B',
      'R702C',
      'R703A',
      'R703B',
      'R703C',
      'R703D',
      'R703E',
      'R703F',
      'R703F',
      'R704AK2',
      'R704BK2',
      'R704CK2',
      'R704DK2',
      'R704EK2',
      'R704FK2',
      'R704GK2',
      'R704HK2',
      'R704IK2',
      'R704JK2',
      'R704KK2',
      'R704LK2',
      'R704MK2',
      'R705A',
      'R705B',
      'R705C',
      'R705D',
      'R705E',
      'R706A1',
      'R706A1B',
      'R706A2',
      'R706A1B',
      'R706B',
      'R706B2',
      'R706C',
      'R706C2',
      'R706D',
      'R706D2',
      'R707',
      'R708',
      'R709',
      'R710',
      'R711AK2',
      'R711AK3',
      'R711AK4',
      'R711BK2',
      'R711BK3',
      'R711BK4',
      'R711CK2',
      'R711CK3',
      'R711CK4',
      'R711DK2',
      'R711DK3',
      'R711DK4',
      'R711EK2',
      'R711EK3',
      'R711EK4',
      'R711FK2',
      'R711FK3',
      'R711FK4',
      'R711GK2',
      'R711GK3',
      'R711GK4',
      'R711HK2',
      'R711HK3',
      'R711HK4',
      'R711IK2',
      'R711IK3',
      'R711IK4',
      'R711JK2',
      'R711JK3',
      'R711JK4',
      'R801_1',
      'R801_2',
      'R801_3',
      'R801_4',
      'R801_5',
      'R801_6',
      'R801_7',
      'R802',
      'R803A',
      'R803B',
      'R803C',
      'R803D',
      'R803E',
      'R803F',
      'R803G',
      'R803H',
      'R803I',
      'R803J',
      'R804A1',
      'R804B1',
      'R805A',
      'R805B',
      'R805C',
      'R805D',
      'R805E',
      'R805F',
      'R805G',
      'R805H',
      'R805I',
      'R806',
      'R807A',
      'R807A1',
      'R809A',
      'R809A1',
      'R809B',
      'R809B1',
      'R809C',
      'R809C1',
      'R809D',
      'R809D1',
      'R809E',
      'R809E1',
      'R809F',
      'R809F1',
      'R901AK2',
      'R901AK3',
      'R901AK4',
      'R901BK2',
      'R901BK3',
      'R901BK4',
      'R901CK2',
      'R901CK3',
      'R901CK4',
      'R901DK2',
      'R901DK3',
      'R901DK4',
      'R901EK2',
      'R901EK3',
      'R901EK4',
      'R901FK2',
      'R901FK3',
      'R901FK4',
      'R901GK2',
      'R901GK3',
      'R901GK4',
      'R901HK2',
      'R901HK3',
      'R901HK4',
      'R901IK2',
      'R901IK3',
      'R901IK4',
      'R901JK2',
      'R901JK3',
      'R901JK4',
      'R901KK2',
      'R901KK3',
      'R901KK4',
      'R901LK2',
      'R901LK3',
      'R901LK4',
      'R902A',
      'R1005A',
      'R1005A1',
      'R1101A1',
      'R1101A2',
      'R1101B',
      'R1101C',
      'R1201A',
      'R1201B',
      'R1201C',
      'R1201D',
      'R1201E',
      'R1201F',
      'R1201G',
      'R1201H',
      'R1201I',
      'R1201J',
      'R1201K',
      'R1201L',
      'R1201M',
      'R1201N',
      'R1201O',
      'R1201P',
      'R1202A',
      'R1203A',
      'R1205A1',
      'R1205A2',
      'R1205A3',
      'R1206A1',
      'R1206A2',
      'R1206A3',
      'R1206A4',
      'R1208AK2',
      'R1208AK3',
      'R1208AK4',
      'R1208BK2',
      'R1208BK3',
      'R1208BK4',
      'R1208CK2',
      'R1208CK3',
      'R1208CK4',
      'R1208DK2',
      'R1208DK3',
      'R1208DK4',
      'R1208EK2',
      'R1208EK3',
      'R1208EK4',
      'R1208FK2',
      'R1208FK3',
      'R1208FK4',
      'R1208GK2',
      'R1208GK3',
      'R1208GK4',
      'R1208HK2',
      'R1208HK3',
      'R1208HK4',
      'R1208IK2',
      'R1208IK3',
      'R1208IK4',
      'R1209AK2',
      'R1209AK3',
      'R1209AK4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1209K2',
      'R1209K3',
      'R1209K4',
      'R1303A01K3',
      'R1303A01K4',
      'R1303A02K3',
      'R1303A02K4',
      'R1303A03K3',
      'R1303A03K4',
      'R1303A04K3',
      'R1303A04K4',
      'R1303A05K3',
      'R1303A05K4',
      'R1303A06K3',
      'R1303A06K4',
      'R1303A07K3',
      'R1303A07K4',
      'R1303A08K3',
      'R1303A08K4',
      'R1303A09K3',
      'R1303A09K4',
      'R1303A10K3',
      'R1303A10K4',
      'R1303A11K3',
      'R1303A11K4',
      'R1305',
      'R1306A',
      'R1306A2',
      'R1307AK2',
      'R1307AK3',
      'R1307BK2',
      'R1307BK3',
      'R1403A',
      'R1403B',
      'R1403C',
      'R1403D',
      'R1403E',
      'R1403F',
      'R1403G',
      'R1403H',
      'R1403I',
      'R1404A1',
      'R1404B',
      'R1404C',
      'R1404D',
      'R1405A',
      'R1405B',
      'R1406',
      'R14061',
      'R1407A',
      'R1407A1',
      'R1407B',
      'R1501AK2',
      'R1501AK3',
      'R1501AK4',
      'R1501AK5',
      'R1501BK2',
      'R1501BK3',
      'R1501BK4',
      'R1501BK5',
      'R1501CK2',
      'R1501CK3',
      'R1501CK5',
      'R1502_1',
      'R1502_1A',
      'R1502_1B',
      'R1502_1C',
      'R1502_1D',
      'R1502_2',
      'R1502_3',
      'R1502_4',
      'R1502_5',
      'R1502_6',
      'R1502_7',
      'R1502_8',
      'R1502_9',
      'R1502_10',
      'R1502_11',
      'R1503A',
      'R1503B',
      'R1503C',
      'R1504A',
      'R1504B',
      'R1504C',
      'R1601AK2',
      'R1601AK2_1',
      'R1601AK3',
      'R1601AK4',
      'R1601AK5',
      'R1601AK6',
      'R1601BK2',
      'R1601BK2_1',
      'R1601BK3',
      'R1601BK4',
      'R1601BK5',
      'R1601AK6',
      'R1602A',
      'R1602A1',
      'R1602B',
      'R1602B1',
      'R1602C',
      'R1602C1',
      'R1602D',
      'R1602D1',
      'R1603A',
      'R1604A',
      'R1604B',
      'R1604C',
      'R1604D'
   ];

   function getAll(){
      $builder = $this->db->table('data dt');
      $builder->join('desa ds', 'ds.kode_desa = dt.R104');
      $builder->join('kec k', 'k.kode_kec = dt.R103');
      // $builder->join('sls s','s.data_id = dt.data_id');
      $query = $builder->get();
      return $query->getResult();
      // $result = json_decode($query, true);
      // return $result;
   }
}