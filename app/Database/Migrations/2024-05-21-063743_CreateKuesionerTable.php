<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKuesionerTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'ques_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'dataKey'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'ques_label'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ]
            ]);
        
        // Membuat primary key
		$this->forge->addKey('ques_id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('ques', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('ques');
    }
}
