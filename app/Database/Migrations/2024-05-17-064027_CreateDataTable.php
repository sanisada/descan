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
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
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
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R106A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R304'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R307B1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R307B1_LAT'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R307B1_LA0'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R307B1_LON'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R307B2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R401A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R401B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R401C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R401D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R402B1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R402B2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R402E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R402E1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R402E2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A8'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A9'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A10'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A11'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A12'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A13'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A14'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A15'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A16'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A17'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A18'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A19'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A20'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403A21'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403B1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R403B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => true
			],
			'R501A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R501A2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R501B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R504C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R504C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => true
			],
			'R509A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509C1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509C1A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => true
			],
			'R509C2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509C3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R509AK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B1K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B1K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B1K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B1K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B2K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B2K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B2K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B2K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B3K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B3K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B3K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B3K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B4K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B4K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B4K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B4K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B5K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B5K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B5K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B5K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B6K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B6K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B6K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B6K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B7K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B7K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B7K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B8K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B8K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B8K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B8K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B9K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B9K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B9K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B10K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B10K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R510B10K5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R511A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R511B1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R511B2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R511B3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R513A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R513B1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R513B2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R513B3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R516'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R516A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => true
			],
			'R518'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R518A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => true
			],
			'R601AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601AK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601AK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601AK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601AK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601BK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601BK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601BK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601BK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601CK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601CK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601CK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601CK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601CK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601DK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601DK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601DK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601DK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601DK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601DK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601EK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601EK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601EK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601EK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601EK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601EK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601FK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601FK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601FK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601FK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601FK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601FK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601GK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601GK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601GK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601GK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601GK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601GK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601HK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601HK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601HK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601HK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601HK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601HK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601IK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601IK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601IK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601IK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601IK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601IK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601JK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601JK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601JK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601JK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601JK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601JK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601KK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601KK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601KK5'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R601KK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601KK7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R601KK8'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R604A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R604B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R604C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R604D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R604E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R605A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R605B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R605C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R605D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R605E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701AK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701BK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701CK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701CK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701DK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701DK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701DK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701EK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701EK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701EK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701FK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701FK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701FK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701GK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701GK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701GK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701HK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701HK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701HK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701IK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701IK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701IK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701JK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701JK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701JK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701JK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701KK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701KK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701KK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701KK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701LK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701LK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701MK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701MK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701NK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701NK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701OK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701OK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701PK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701QK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R701R'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => true
			],
			'R702A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R702B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R702C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
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
			'R704AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704JK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704KK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704LK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R704MK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R705A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R705B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R705C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R705D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R705E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R706A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R706A1B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R706A2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R706A2B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R706B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R706B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R706C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R706C2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R706D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R706D2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R707'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R708'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R709'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R710'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711CK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711DK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711DK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711EK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711EK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711FK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711FK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711GK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711GK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711HK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711HK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711IK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711IK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711JK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711JK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R711JK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R801_7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R802'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803F'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803G'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803H'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803I'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R803J'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R804A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R804B1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805F'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805G'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805H'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R805I'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R806'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R807A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R807A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R809A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R809A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R809B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R809B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R809C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R809C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R809D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R809D1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R809E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R809E1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R809F'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R809F1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901DK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901EK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901FK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901GK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901HK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901IK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901JK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901JK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901KK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901KK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901KK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R901LK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901LK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R901LK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R902A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1005A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1005A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1101A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1101A2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1101B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1101C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201F'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201G'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201H'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201I'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201J'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201K'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201L'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201M'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201N'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201O'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1201P'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1202A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1203A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1205A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1205A2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1205A3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1206A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1206A2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1206A3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1206A4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208CK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208DK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208DK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208DK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208EK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208EK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208EK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208FK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208FK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208FK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208GK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208GK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208GK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208HK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208HK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208HK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208IK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208IK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1208IK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1209K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A01K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A01K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A02K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A02K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A03K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A03K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A04K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A04K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A05K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A05K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A06K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A06K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A07K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A07K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A08K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A08K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A09K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A09K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A10K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A10K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A11K3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1303A11K4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1305'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1306A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1306A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1307AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1307AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1307BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1307BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403E'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403F'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403G'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403H'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1403I'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1404A1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1404B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1404C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1404D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1405A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1405B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1406'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R14061'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1407A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1407A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1407B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501AK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501BK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501CK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501CK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1501CK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_1'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_1A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_1B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_1C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_1D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_7'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_8'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_9'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_10'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1502_11'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1503A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1503B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1503C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1504A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1504B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1504C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601AK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601AK2_1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1601AK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601AK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601AK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601AK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601BK2'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601BK2_1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1601BK3'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601BK4'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601BK5'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1601AK6'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1602A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1602A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1602B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1602B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1602C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1602C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1602D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1602D1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true
			],
			'R1603A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1604A'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1604B'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1604C'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
			],
			'R1604D'       => [
				'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
				],
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
