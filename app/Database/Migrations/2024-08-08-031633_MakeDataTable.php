<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'data_id'          => [
				'type' => 'VARCHAR',
                'constraint' => 36,
                'null' => false,
			],
			'status' => [
				'type'       => 'ENUM',
				'constraint' => ['SUBMITTED', 'DRAFT'],
				'default'    => 'DRAFT',
			],
			'Tahun'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R101'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R102'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R103'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R103N'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R104'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R104N'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R105'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R201'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R202'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R203'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R203B1_LAT'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R203B1_LA0'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R203B1_LON'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R203B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R301'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R301A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R301B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R301C'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R301D'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R302A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R302A1'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R302A2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R302B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R302B1'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R302B2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303C'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303D'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303E'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303F'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303G'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303H'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303I'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303J'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303K'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303L'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303M'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303N'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303O'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303P'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303Q'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303R'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R303T'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R303U'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R304A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R304B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R401A1'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R401A2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R401B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R402'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R402S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R403A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R403B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R403C1'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R403C1A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R403C2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R403C3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404AK5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B1K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B1K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B1K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B1K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B2K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B2K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B2K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B2K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B3K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B3K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B3K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B3K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B4K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B4K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B4K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B4K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B5K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B5K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B5K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B5K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B6K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B6K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B6K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B6K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B7K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B7K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B7K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B7K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B8K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B8K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B8K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B8K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B9K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B9K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B9K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B9K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B10K2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B10K3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B10K4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R404B10K5'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R405A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R405B1'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R405B2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R405B3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R406A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R406B1'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R406B2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R406B3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R407'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R407S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R408'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R408A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501AK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501AK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501AK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501BK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501BK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501BK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501BK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501CK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501CK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501CK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501CK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501CK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501DK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501DK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501DK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501DK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501DK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501DK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501EK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501EK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501EK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501EK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501EK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501EK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501FK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501FK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501FK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501FK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501FK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501FK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501GK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501GK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501GK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501GK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501GK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501GK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501GK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501HK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501HK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501HK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501HK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501HK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501HK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501IK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501IK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501IK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501IK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501IK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501IK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501JK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501JK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501JK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501JK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501JK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501JK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501JK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501KK2'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501KK3'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501KK4'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501KK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R501KK6'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501KK7'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R501KK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R502A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R502B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R502C'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R502D'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R502E'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R503A'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R503B'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R503C'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R503D'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'R503E'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			// 'R601AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601AK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601AK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601BK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601BK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601CK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601CK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601CK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601DK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601DK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601DK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601DK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601EK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601EK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601EK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601EK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601FK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601FK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601FK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601FK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601GK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601GK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601GK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601GK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601HK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601HK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601HK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601HK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601IK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601IK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601IK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601IK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601JK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601JK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601JK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601JK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601KK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601KK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601KK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601KK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601LK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601LK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601MK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601MK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601NK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601NK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601OK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601OK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601PK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601QK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601R'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R602A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R602B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R602C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R603A'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R603B'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R603C'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R603D'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R603E'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R603F'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R603G'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R604AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604DK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604EK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604FK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604GK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604HK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604IK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604JK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604KK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604LK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R604MK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R605A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R605B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R605C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R605D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R605E'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R606A1'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R606A1S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R606A2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R606A2S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R606B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R606BS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R606C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R606CS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R606D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R606DS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R607'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R608'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R609'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R610'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611AK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611BK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611CK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611CK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611DK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611DK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611DK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611EK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611EK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611EK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611FK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611FK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611FK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611GK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611GK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611GK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611HK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611HK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611HK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611IK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611IK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611IK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611JK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611JK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R611JK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_1'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_6'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R701_7'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R702'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R703A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703E'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703F'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703G'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703H'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703I'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R703J'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R704A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R704B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705E'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705F'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705G'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705H'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R705I'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R706'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R707'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R707S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R708A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R708AS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R708B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R708BS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R708C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R708CS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R708D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R708DS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R708E'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R708ES'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R708F'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R708FS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801AK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801BK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801CK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801CK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801DK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801DK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801DK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801EK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801EK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801EK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801FK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801FK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801FK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801GK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801GK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801GK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801HK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801HK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801HK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801IK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801IK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801IK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801JK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801JK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801JK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801KK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801KK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801KK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R801LK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801LK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R801LK4'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R802'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R803'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R901A1'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R901A2'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R901B'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R901C'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1001A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001E'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001F'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001G'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001H'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001I'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001J'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001K'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001L'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001M'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001N'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001O'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1001P'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1002'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1003'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1004A1'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1004A2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1004A3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1005A1'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1005A2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1005A3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1005A4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006AK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006BK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006CK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006CK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006DK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006DK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006DK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006EK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006EK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006EK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006FK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006FK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006FK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006GK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006GK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006GK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006HK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006HK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006HK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006IK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006IK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1006IK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007AK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007BK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007CK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007CK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007DK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007DK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007DK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007EK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007EK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007EK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007FK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007FK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007FK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007GK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007GK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007GK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007HK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007HK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007HK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007IK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007IK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007IK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007JK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007JK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1007JK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110101K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110101K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110102K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110102K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110103K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110103K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110104K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110104K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110105K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110105K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110106K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110106K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110107K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110107K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110108K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110108K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110109K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110109K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110110K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110110K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110111K3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R110111K4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1102'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1103'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1103S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1104AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1104AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1104BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1104BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201E'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201F'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201G'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201H'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1201I'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1202A1'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1202B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1202C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1202D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1203A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1203B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1204'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1204S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1205A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1205AS'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1205B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301AK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301AK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301BK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301BK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301CK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301CK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301CK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1301CK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_1'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_1A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_1B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_1C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_1D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_6'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_7'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_8'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_9'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_10'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1302_11'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1303A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1303B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1303C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1304A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1304B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1304C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401AK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401AK2S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1401AK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401AK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401AK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401AK6'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401BK2'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401BK2S'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1401BK3'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401BK4'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401BK5'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1401AK6'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1402A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1402A1'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1402B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1402B1'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1402C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1402C1'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1402D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1402D1'       => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => '255'
			// ],
			// 'R1403'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1404A'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1404B'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1404C'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R1404D'       => [
			// 	'type'           => 'INT',
			// 	'constraint'     => '10'
			// ],
			// 'R601AK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601AK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601BK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601BK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601CK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601CK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601DK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601DK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601EK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601EK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601FK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601FK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601GK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601GK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601HK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601HK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601IK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601IK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601JK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601JK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601KK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601KK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601LK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601LK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601MK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601MK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601NK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601NK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601OK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601OK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601PK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R601QK3S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604AK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604BK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604CK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604DK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604EK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604FK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604GK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604HK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604IK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604JK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604KK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604LK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R604MK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R803S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1001PS'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1005A4S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006AK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006BK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006CK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006DK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006EK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006FK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006GK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006HK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
			// 'R1006IK2S'       => [
			// 	'type'           => 'TEXT',
			// 	'constraint'     => '255'
			// ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('data_id', TRUE);
        // $this->forge->addForeignKey('R104', 'desa', 'kode_desa', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('R103', 'kecamatan', 'kode_kec', 'CASCADE', 'CASCADE');

		// Membuat tabel data
		$this->forge->createTable('data', TRUE);
    }

    public function down()
    {
        // menghapus tabel data
		$this->forge->dropTable('data');
    }
}
