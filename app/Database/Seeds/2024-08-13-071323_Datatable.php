<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datatable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'data_id'          => [
				'type'           => 'VARCHAR',
				'auto_increment' => true
			],
			'status' => [
				'type'       => 'ENUM',
				'constraint' => ['SUBMITTED', 'DRAFT'],
				'default'    => 'DRAFT',
			],
			'Tahun'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R101'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R102'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R103'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R104'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R105'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R201'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R202'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R203'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R203B1_LAT'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R203B1_LA0'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R203B1_LON'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R203B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R301'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R301A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R301B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R301C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R301D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R302A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R302A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R302A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R302B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R302B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R302B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303G'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303H'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303I'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303J'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303K'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303L'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303M'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303N'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303O'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303P'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303Q'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303R'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303T'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R303U'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R304A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R304B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R401A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R401A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R401B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R402'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R402S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R403A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R403B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R403C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R403C1A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R403C2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R403C3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B1K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B1K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B1K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B1K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B2K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B2K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B2K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B2K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B3K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B3K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B3K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B3K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B4K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B4K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B4K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B4K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B5K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B5K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B5K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B5K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B6K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B6K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B6K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B6K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B7K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B7K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B7K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B7K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B8K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B8K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B8K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B8K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B9K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B9K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B9K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B9K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B10K2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B10K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B10K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R404B10K5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R405A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R405B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R405B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R405B3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R406A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R406B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R406B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R406B3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R407'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R407S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R408'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R408A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501AK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501BK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501CK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501DK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501EK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501FK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501GK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501HK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501IK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501JK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R501KK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R502A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R502B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R502C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R502D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R502E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R503A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R503B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R503C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R503D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R503E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601LK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601LK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601MK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601MK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601NK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601NK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601OK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601OK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601PK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601QK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601R'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R602A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R602B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R602C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R603G'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604JK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604KK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604LK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604MK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R605A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R605B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R605C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R605D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R605E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606A1S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606A2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606BS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606CS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R606DS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R607'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R608'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R609'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R610'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611DK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611EK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611FK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611GK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611HK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611IK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611JK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611JK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R611JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R701_7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R702'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703G'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703H'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703I'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R703J'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R704A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R704B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705G'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705H'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R705I'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R706'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R707'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R707S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708AS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708BS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708CS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708DS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708ES'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R708FS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801DK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801EK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801FK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801GK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801HK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801IK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801JK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801JK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801KK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801KK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801KK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801LK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801LK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R801LK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R802'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R803'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001G'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001H'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001I'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001J'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001K'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001L'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001M'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001N'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001O'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001P'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1002'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1003'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1004A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1004A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1004A3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1005A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1005A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1005A3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1005A4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006DK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006EK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006FK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006GK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006HK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006IK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007DK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007DK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007EK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007EK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007FK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007FK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007GK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007GK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007HK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007HK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007IK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007IK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007JK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007JK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1007JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110301K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110301K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110302K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110302K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110303K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110303K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110304K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110304K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110305K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110305K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110306K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110306K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110307K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110307K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110308K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110308K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110309K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110309K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110310K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110310K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110311K3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R110311K4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1102'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1103'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1103S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1104AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1104AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1104BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1104BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201G'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201H'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1201I'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1202A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1202B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1202C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1202D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1203A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1203B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1204'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1204S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1205A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1205AS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1205B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301BK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301CK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301CK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1301CK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_1A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_1B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_1C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_1D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_7'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_9'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_10'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1302_11'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1303A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1303B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1303C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1304A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1304B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1304C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401BK2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401BK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401BK3'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401BK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1401AK6'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1402D1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1403'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1404A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1404B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1404C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1404D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601LK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601LK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601MK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601MK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601NK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601NK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601OK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601OK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601PK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601QK3S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604AK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604BK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604CK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604DK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604EK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604FK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604GK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604HK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604IK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604JK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604KK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604LK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604MK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R803S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1001PS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1005A4S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006AK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006BK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006CK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006DK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006EK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006FK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006GK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006HK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1006IK2S'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('data_id', TRUE);
		$this->forge->createTable('data', TRUE);
    }

    public function down()
    {
        // menghapus tabel data
		$this->forge->dropTable('data');
    }
}
