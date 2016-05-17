<?php

namespace App\Http\Controllers;

use App\perritoModel;
use Illuminate\Http\Request;
use App\Http\Requests;

class perrito extends Controller
{
    public function index(){
        return view('perrito');
    }

    public function create(Request $request){
        $edicion = false;
        //dd($request);
        $perrito = perritoModel::find($request->perritoId);

        if(isset($perrito)){
            $edicion = true;
        }else{
            $perrito = new PerritoModel();
        }

        $perrito->crearPerrito($request,$edicion);
        return view('perrito');
    }

    /**
     * @param $id
     */
    public function show($id){
        $variable = perritoModel::find($id);
        //return view('perrito',["perritoNombre"=>$variable->perrito_nombre]);
        //return view('perrito',["perritoNombre"=>$variable->getPerritoNombre()]);
        return view('perrito',["variable" => $variable]);
    }
}
