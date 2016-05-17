<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class perritoModel extends Model
{
    protected $table = "tb_perrito";
    protected $primaryKey = "perrito_id";
    public $timestamps = false;

    public function getPerritoId(){
        return $this->perrito_id;
    }

    public function getPerritoNombre(){
        return $this->perrito_nombre;
    }

    public function getPerritoRaza(){
        return $this->perrito_raza;
    }

    public function getPerritoFechanacimiento(){
        return $this->perrito_fechanacimiento;
    }

    public function setPerritoNombre($nombre){
        $this->perrito_nombre = $nombre;
    }

    public function setPerritoRaza($raza){
        $this->perrito_raza = $raza;
    }

    public function setPerritoFechanacimiento($fechanacimiento){
        $this->perrito_fechanacimiento = $fechanacimiento;
    }
    
    /**
     * @comentario: método para crear o actualizar un registro a partir de un Request y una variable boolean.
     * @param Request 
     * @autor: Alejandra
     * @fecha: 2016-03-21
     */
    public function crearPerrito(Request $request,$edicion){
        /*$this->perrito_nombre = $request->perritoNombre;
        $this->perrito_raza = $request->perritoRaza;
        $this->perrito_fechanacimiento = '2016-03-21';*/
        $this->setPerritoNombre(strtoupper($request->perritoNombre));
        $this->setPerritoRaza(strtoupper($request->perritoRaza));
        
        if(!$edicion) {
            $this->setPerritoFechanacimiento($request->perritoFecha);
        }
        $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     */
    public function eliminarPerrito(){
        return $this->delete();
    }
}
