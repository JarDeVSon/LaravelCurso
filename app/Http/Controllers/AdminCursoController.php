<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
class AdminCursoController extends Controller
{
    public function index(){
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }
    public function adicionar(){
        return view('admin.cursos.adicionar');
    }
}
