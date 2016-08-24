<?php
namespace App\Http\Controllers;
use App\ORM\Matricula as mat;
use App\ORM\Sede;
use App\ORM\Usuario;
use App\ORM\Categoria;
use App\ORM\Examen;
use App\Http\Requests;

class Matricula extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $matricula = mat::all();
        $sede = Sede::all();
        $alumno = Usuario::where('tipusu_id','2')->get();
        $categoria = Categoria::all();
        $examen = Examen::all();
        
        return view("matricula",["matricula"=>$matricula,"sede"=>$sede,"alumno"=>$alumno,"categoria"=>$categoria,
                                 "examen"=>$examen]);
    }

    public function show($id)
    {
    }
    
    public function destroy($id)
    {
        return "OK";
    }
}