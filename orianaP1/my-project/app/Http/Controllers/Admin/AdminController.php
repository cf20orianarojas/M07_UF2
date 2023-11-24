<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Ruta per las views
    public function centres() {
        return view('Admin.admin')->with(['result' => 'Aqui es mostraran els centres que el rol admin pot veura']);
    }
    // datos de los formularios
    public function usuaris(Request $request) {
        $nom = $request->input('submit');
        return view('Admin.admin')->with(['result' => 'Ruta usuaris']);
    }
}
