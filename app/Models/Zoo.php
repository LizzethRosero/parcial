<?php

namespace App\Models;

use CodeIgniter\Model;

class Zoo extends Model
{
    protected $table            = 'zoologico';
    protected $primaryKey       = 'id_zoologico';
    
    protected $returnType       = 'array';
    
    protected $allowedFields    = ['nombre_zoo','dirreccion_zoo','telefono_zoo'];

    
}
