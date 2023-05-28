<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FlightMigration extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'rute_from' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'rute_to' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'depart_at' => [
                'type' => 'TIME',
            ],
            'arrive_at' => [
                'type' => 'TIME',
            ],
            'date' => [
                'type' => 'DATETIME',
            ],
            'seat_qty' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'price' => [
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
        $this->forge->createTable('flights');
    }

    public function down()
    {
        $this->forge->dropTable('flights');
    }
}
