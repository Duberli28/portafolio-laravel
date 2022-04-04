<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsuarioController extends Controller
{
    public function index(){
        $user=User::all();
        return view("paginas.inicio",compact("user"));
    }
}
