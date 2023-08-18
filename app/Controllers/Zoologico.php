<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Zoologico extends BaseController
{
    public function index()
    {
        return view('nombre/inicio');
    }
}
