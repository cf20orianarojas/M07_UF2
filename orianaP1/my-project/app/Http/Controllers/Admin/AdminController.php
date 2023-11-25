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
    
    // Obte les dades del formulari de inici 
    public function usuaris(Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Si els valors son iguals a les credencials de Admin, retornara la view admin
    return $email == "orojas@iticbcn.cat" && $password == "12345" 
                      ? view('Admin.admin') : view('signin'); 
    }
}
