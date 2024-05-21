<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel data
		$this->forge->addField([
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'user_username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'user_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'user_email'     => [
                'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'user_password'     => [
                'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'user_role' => [
                'type'       => 'ENUM',
                'constraint' => ['Admin', 'Operator', 'Viewer'],
                'default'    => 'pending',
            ],
            'kecamatan' => [
                'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
            ],
            'desa' => [
                'type'           => 'INT',
				'constraint'     => '10',
				'null'           => true
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
            ]);
        
        // Membuat primary key
		$this->forge->addKey('user_id', TRUE);

		// Membuat tabel data
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        //
    }
}
