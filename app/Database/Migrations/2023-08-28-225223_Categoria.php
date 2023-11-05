<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categoria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'descricao' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
            'statusRegistro'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'comment'       => "1=Ativo; 2=Inativo",
                'default'       => 1
            ],
            'created_at'        => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
            'updated_at'        => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
            'deleted_at'        => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
        ]);

        // Chave primária
        $this->forge->addKey('id', true);

        // chave única
        $this->forge->addKey('descricao', false, true);

        //
        $this->forge->createTable('categoria', false, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('categoria');
    }
}
