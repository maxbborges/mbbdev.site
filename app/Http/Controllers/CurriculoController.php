<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    public function home()
    {
        return view('curriculo.home');
    }
}
