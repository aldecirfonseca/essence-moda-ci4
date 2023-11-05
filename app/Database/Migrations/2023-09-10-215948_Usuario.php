<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
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
            'nome' => [
                'type'          => 'VARCHAR',
                'constraint'    => '60',
            ],
            'login' => [
                'type'          => 'VARCHAR',
                'constraint'    => '150',
            ],
            'senha' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => '150',
            ],
            'nivel'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'comment'       => "1=Administrador; 2=Usuario; 11=Cliente",
                'default'       => 2
            ],
            'statusRegistro'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'comment'       => "1=Ativo; 2=Inativo",
                'default'       => 1
            ],
            'pessoa_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
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
        $this->forge->addKey('login', false, true);

        // Chave estrangeira 
        $this->forge->addForeignKey("pessoa_id", "pessoa", "id", "NO ACTION", "NO ACTION");

        //
        $this->forge->createTable('usuario', false, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
