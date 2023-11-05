<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuariousuariorecuperasenha extends Migration
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
            'usuario_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'chave' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
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

        // chave estrangeira
        $this->forge->addForeignKey('usuario_id', 'usuario', 'id');

        //
        $this->forge->createTable('usuariorecuperasenha', false, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('usuariorecuperasenha');
    }
}
