<?php
namespace App\Http\Controllers;
//use App\Http\Requests\Request;
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
        $ciudad = Ciudad::all();
        $eps = Eps::all();
        $etnia = Etnia::all();
        $sede = Sede::all();
        $discapacidad = Discapacidad::all();
        $tipoUsuario = TipoUsuario::all();
        $rol = Rol::all();
        $autocomplete = $ciudad[0]->getCiudadAutocomplete();

        return view("usuario",["usuarios"=>$users,"ciudad"=>$ciudad,"eps"=>$eps,"etnia"=>$etnia,"sede"=>$sede,
                               "discapacidad"=>$discapacidad,"tipoUsuario"=>$tipoUsuario,"rol"=>$rol,
                               "autocomplete"=>$autocomplete]);
    }

    public function autocomplete(Request $request)
    {
        $results = array();
        $term = $request->input(['ac3']);
        $ciudades = Ciudad::where('ciudad_nombre','LIKE','%'.$term.'%')->take(10)->get();

        foreach ($ciudades as $ciudad)
        {
            $results[] = ['id'=>$ciudad->ciudad_id,'value'=>$ciudad->ciudad_nombre];
            //$results[] = $ciudad->ciudad_nombre;
        }
        //var_dump($results);
        return response()->json($results);
        //return Response::json($results);
    }

    public function show($id)
    {
    }
    public function destroy($id)
    {
        return "OK";
    }
}