<?php
namespace App\Http\Controllers;

use App\ORM\Usuario as user;
use App\ORM\Ciudad;
use App\ORM\Eps;
use App\ORM\Etnia;
use App\ORM\Sede;
use App\ORM\Discapacidad;
use App\ORM\TipoUsuario;
use App\ORM\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class Usuario extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = user::all();
        return view("usuario",["usuarios"=>$users]);
    }

    public function create()
    {
        $ciudad = Ciudad::all();
        $eps = Eps::all();
        $etnia = Etnia::all();
        $sede = Sede::all();
        $discapacidad = Discapacidad::all();
        $tipoUsuario = TipoUsuario::all();
        $rol = Rol::all();
        $autocomplete = $ciudad[0]->getCiudadAutocomplete();

        return view("crearusuario",["ciudad"=>$ciudad,"eps"=>$eps,"etnia"=>$etnia,"sede"=>$sede,
            "discapacidad"=>$discapacidad,"tipoUsuario"=>$tipoUsuario,"rol"=>$rol,
            "autocomplete"=>$autocomplete]);
    }

    public function store()
    {

    }

    public function show($id)
    {
        return view("usuario");
    }

    public function destroy($id)
    {
        return "OK";
    }
}