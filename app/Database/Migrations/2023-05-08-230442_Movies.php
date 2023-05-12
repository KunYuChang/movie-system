<?php

// php spark make:migration Movies
// php spark migrate

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Movies extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => TRUE
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('movies');
    }

    public function down()
    {
        $this->forge->dropTable('movies');
    }
}
