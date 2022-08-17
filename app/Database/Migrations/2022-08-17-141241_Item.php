<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Item extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'TEXT',
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'image' => [
                'type' => 'TEXT'
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'created_date' => [
                'type' => 'DATETIME'
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('Item');
    }

    public function down()
    {
        $this->forge->dropTable('Item');
    }
}
