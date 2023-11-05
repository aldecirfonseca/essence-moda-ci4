<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = "categoria";
    protected $primarykey = "id";
    protected $allowedFields = [
        "descricao",
        "statusRegistro"
    ];

    //protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $validationRules = [
        "descricao" => [
            "label" => "Descrição",
            "rules" => "required|min_length[3]|max_length[50]"
        ],
        "statusRegistro" => [
            "label" => "Status",
            "rules" => "required|integer"
        ]
    ];
}