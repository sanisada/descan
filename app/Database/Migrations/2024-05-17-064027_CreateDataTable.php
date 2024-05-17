<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'R101'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
            'R102'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R103'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R104'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R106A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],

			'R304'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R307B1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R307B1_LAT'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R307B1_LA0'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R307B1_LON'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R307B2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R401'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R401A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R401B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R401C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R401D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R402B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R402B1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R402B2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R402E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A9'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A10'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A11'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A12'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A13'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A14'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A15'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A16'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A17'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A18'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A19'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A20'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403A21'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403B1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R403B2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R501A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R501A2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R501B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R504C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],

			'R509A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509C1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],

			'R509C2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509C3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R509AK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B1K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B1K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B1K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B1K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B2K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B2K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B2K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B2K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B3K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B3K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B3K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B3K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B4K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B4K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B4K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B4K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B5K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B5K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B5K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B5K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B6K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B6K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B6K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B6K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B7K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B7K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B7K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B8K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B8K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B8K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B8K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B9K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B9K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B9K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B10K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B10K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R510B10K5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R511A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R511B1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R511B2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R511B3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R516'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],

			'R518'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],

			'R601AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601AK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601AK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601AK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601AK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601BK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601CK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601DK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601EK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601FK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601GK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601HK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601IK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601JK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R601KK8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R604A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R604B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R604C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R604D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R604E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R605A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R605B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R605C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R605D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R605E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701AK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701BK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701BK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701CK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701CK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701CK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701DK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701DK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701DK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701DK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701EK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701EK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701EK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701EK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701FK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701FK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701FK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701FK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701GK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701GK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701GK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701GK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701HK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701HK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701HK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701HK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701IK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701IK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701IK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701IK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701JK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701JK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701JK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701JK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701KK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701KK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701KK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701KK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701LK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701LK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701MK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701MK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701NK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701NK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701OK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701OK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701PK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R701QK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],

			'R702A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R702B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R702C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R703A'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R703B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R703C'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R703D'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R703E'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R703F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R703F'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R704AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704DK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704EK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704FK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704GK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704HK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704IK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704JK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704KK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704LK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R704MK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R705A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R705B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R705C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R705D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R705E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R706A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R706A1B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R706A2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R706A1B'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R706B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R706B2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R706C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R706C2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R706D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R706D2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R707'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R708'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R709'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R710'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711BK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711CK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711CK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711DK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711DK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711DK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711EK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711EK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711EK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711FK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711FK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711FK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711GK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711GK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711GK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711HK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711HK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711HK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711IK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711IK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711IK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711JK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711JK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R711JK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R801_7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R802'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803F'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803G'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803H'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803I'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R803J'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R804A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R804B1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805F'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805G'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805H'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R805I'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R806'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R807A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R807A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R809A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R809A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R809B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R809B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R809C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R809C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R809D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R809D1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R809E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R809E1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R809F'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R809F1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901AK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901BK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901CK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901CK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901DK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901DK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901DK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901EK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901EK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901EK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901FK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901FK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901FK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901GK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901GK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901GK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901HK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901HK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901HK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901IK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901IK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901IK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901JK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901JK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901JK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901KK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901KK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901KK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R901LK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901LK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R901LK4'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R902A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1005A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1005A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1101A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1101A2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1101B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1101C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201F'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201G'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201H'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201I'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201J'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201K'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201L'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201M'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201N'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201O'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1201P'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1202A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1203A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1205A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1205A2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1205A3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1206A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1206A2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1206A3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1206A4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208BK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208CK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208CK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208DK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208DK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208DK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208EK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208EK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208EK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208FK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208FK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208FK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208GK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208GK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208GK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208HK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208HK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208HK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208IK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208IK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1208IK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1209K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A01K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A01K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A02K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A02K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A03K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A03K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A04K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A04K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A05K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A05K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A06K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A06K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A07K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A07K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A08K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A08K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A09K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A09K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A10K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A10K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A11K3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1303A11K4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1305'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1306A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1306A2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1307AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1307AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1307BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1307BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403E'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403F'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403G'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403H'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1403I'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1404A1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1404B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1404C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1404D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1405A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1405B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1406'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R14061'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1407A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1407A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1407B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501AK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501BK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501BK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501CK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501CK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1501CK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_1'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_1A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_1B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_1C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_1D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_7'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_8'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_9'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_10'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1502_11'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1503A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1503B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1503C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1504A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1504B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1504C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601AK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601AK2_1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1601AK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601AK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601AK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601AK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601BK2'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601BK2_1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1601BK3'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601BK4'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601BK5'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1601AK6'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1602A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1602A1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1602B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1602B1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1602C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1602C1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1602D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1602D1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'R1603A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1604A'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1604B'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1604C'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'R1604D'       => [
				'type'           => 'int',
				'constraint'     => '10'
			]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('data', TRUE);
    }

    public function down()
    {
        // menghapus tabel data
		$this->forge->dropTable('data');
    }
}
