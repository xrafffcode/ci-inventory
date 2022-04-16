<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Item extends Migration
{
    public function up()
    {
         $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'image'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'stok' => [
				'type'           => 'INT',
				'constraint'     => 100,
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('items', TRUE);
    }

    public function down()
    {
        //
    }
}
