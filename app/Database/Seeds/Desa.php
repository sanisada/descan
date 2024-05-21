<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Desa extends Seeder
{
    public function run()
    {
        // membuat data
		$desa_data = [
			[
				'kode_kec' => '1810030',
                'kode_desa' => '1810030011',
				'desa'  => 'PANUTAN'
			],
			[
				'kode_kec' => '1810030',
                'kode_desa' => '1810030010',
				'desa'  => 'LUGUSARI'
			],
			[
				'kode_kec' => '1810040',
                'kode_desa' => '1810040024',
				'desa'  => 'FAJAR AGUNG'
			],
			[
				'kode_kec' => '1810050',
                'kode_desa' => '1810050023',
				'desa'  => 'WONODADI UTARA'
			]
		];

		foreach($desa_data as $data){
			// insert semua data ke tabel
			$this->db->table('desa')->insert($data);
		}
    }
}
