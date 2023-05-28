<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlogMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'desc_sort' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'body' => [
                'type' => 'VARCHAR',
                'constraint' => 10000,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('blogs');
    }

    public function down()
    {
        $this->forge->dropTable('blogs');
    }
}
