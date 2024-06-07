<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarSLS extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'sls_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'data_id'          => [
				'type'           => 'INT',
				'unsigned'       => true
			],
			'kode_desa'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'kode_sls'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'nama_sls'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ]
            ]);
        
        // Membuat primary key
		$this->forge->addKey('sls_id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('sls', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('sls');
    }
}
