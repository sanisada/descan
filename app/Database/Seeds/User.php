<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        // membuat data
		$user_data = [
			[
				'user_username' => 'admin',
                'user_name' => 'Admin Prospera',
				'user_email'  => 'admin@gmail.com',
                'user_password' => '$2y$10$p/Ph.atRscQ5yEKE19.RAuo52uvppBt1Z6/Sv0LQTjYPOPKjJiEhW',
                'user_role' => 'Admin',
				'kecamatan' => '',
				'desa'  => ''
			],
            [
				'user_username' => 'operator',
                'user_name' => 'Operator Panutan',
				'user_email'  => 'opera@ymail.com',
                'user_password' => '$2y$10$H.DJgaEINhAXbyVtzjQPs.XIj1rmqdlaaCA3OhUVHcwgburW3XiMK',
                'user_role' => 'Operator',
				'kecamatan' => '1810030',
				'desa'  => '1810030011'
			],
            [
				'user_username' => 'viewer',
                'user_name' => 'Viewer Panutan',
				'user_email'  => 'viewer@panutan.id',
                'user_password' => '$2y$10$p/Ph.atRscQ5yEKE19.RAuo52uvppBt1Z6/Sv0LQTjYPOPKjJiEhW',
                'user_role' => 'Viewer',
				'kecamatan' => '1810030',
				'desa'  => '1810030011'
			]
		];

		foreach($user_data as $data){
			// insert semua data ke tabel
			$this->db->table('users')->insert($data);
		}
    }
}
