<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kecamatan extends Seeder
{
    public function run()
    {
        // membuat data
		$kec_data = [
			[
				'kode_kec' => '1810010',
				'kecamatan'  => 'PARDASUKA'
			],
			[
				'kode_kec' => '1810020',
				'kecamatan'  => 'AMBARAWA'
			],
			[
				'kode_kec' => '1810030',
				'kecamatan'  => 'PAGELARAN'
			],
			[
				'kode_kec' => '1810031',
				'kecamatan'  => 'PAGELARAN UTARA'
			],
			[
				'kode_kec' => '1810040',
				'kecamatan'  => 'PRINGSEWU'
			],
			[
				'kode_kec' => '1810050',
				'kecamatan'  => 'GADING REJO'
			],
			[
				'kode_kec' => '1810060',
				'kecamatan'  => 'SUKOHARJO'
			],
			[
				'kode_kec' => '1810070',
				'kecamatan'  => 'BANYUMAS'
			],
			[
				'kode_kec' => '1810080',
				'kecamatan'  => 'ADI LUWIH'
			]
		];

		foreach($kec_data as $data){
			// insert semua data ke tabel
			$this->db->table('kec')->insert($data);
		}
    }
}
