<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKecTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'kec_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kode_kec'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'kecamatan'     => [
                'type'           => 'VARCHAR',
				'constraint'     => '255'
            ]
            ]);
        
        // Membuat primary key
		$this->forge->addKey('kec_id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('kec', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kec');
    }
}
