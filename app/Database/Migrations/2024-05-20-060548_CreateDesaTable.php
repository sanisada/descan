<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDesaTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'desa_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kode_kec'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'kode_desa'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'desa'     => [
                'type'           => 'VARCHAR',
				'constraint'     => '255'
            ]
            ]);
        
        // Membuat primary key
		$this->forge->addKey('desa_id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('desa', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('desa');
    }
}
