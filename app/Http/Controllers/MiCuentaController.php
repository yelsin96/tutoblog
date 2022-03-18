<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiCuentaController extends Controller
{
    public function index(){
        return view('theme.back.menu.index');
    }
}
