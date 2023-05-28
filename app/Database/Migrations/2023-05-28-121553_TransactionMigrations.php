<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionMigrations extends Migration
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
            'user_id' => [
                'type' => 'INT',
            ],
            'flight_id' => [
                'type' => 'INT',
            ],
            'total_price' => [
                'type' => 'INT',
            ],
            'total_people' => [
                'type' => 'INT',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'extra_bagage' => [
                'type' => 'INT',
            ],
            'rent' => [
                'type' => 'INT',
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
        $this->forge->createTable('transactions'); 
    }
    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
