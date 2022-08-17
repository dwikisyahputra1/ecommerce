<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
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
            'id_item' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'subtotal' => [
                'type' => 'INT',
                'constraint' => 11
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
        $this->forge->addForeignKey('id_user', 'user', 'id', 'CASCADE', 'NO ACTION');
        $this->forge->addForeignKey('id_item', 'item', 'id', 'CASCADE', 'NO ACTION');
        $this->forge->createTable('transaction');
    }

    public function down()
    {
        $this->forge->dropTable('transaction');
    }
}
