<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comment extends Migration
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
            'comment' => [
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
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_item', 'item', 'id');
        $this->forge->createTable('comment');
    }

    public function down()
    {
        $this->forge->dropTable('comment');
    }
}
