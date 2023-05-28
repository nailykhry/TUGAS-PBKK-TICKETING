<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SeatMigration extends Migration
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
            'flight_id' => [
                'type' => 'INT',
            ],
            'number' => [
                'type' => 'INT',
            ],
            'status' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('seats');
    }

    public function down()
    {
        $this->forge->dropTable('seats');
    }
}
