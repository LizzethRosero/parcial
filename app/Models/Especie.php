<?php

namespace App\Models;

use CodeIgniter\Model;

class Especie extends Model
{
    
    protected $table            = 'especies';
    protected $primaryKey       = 'id_especie';
    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre_especie','nombre_cientifico','edad_especie','zoologico'];

    
}
