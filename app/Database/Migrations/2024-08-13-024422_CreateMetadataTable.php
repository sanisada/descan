<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMetadataTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'metadata_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'dataKey'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'label'     => [
                'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'definisi'     => [
                'type'           => 'VARCHAR',
				'constraint'     => '600'
            ]
            ]);
        
        // Membuat primary key
		$this->forge->addKey('metadata_id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('metadata', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('metadata');
    }
}
