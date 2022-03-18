<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        /* $menus = Menu::getMenu();
        return view('theme.back.mi-cuenta.index', compact('menus')); */
        return view('theme.back.mi-cuenta.index'); 
    }

    public function crear(){
        return view('theme.back.menu.crear');
    }

}
