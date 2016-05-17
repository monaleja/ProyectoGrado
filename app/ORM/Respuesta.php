<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = "todo_respuesta";
    protected $primaryKey = "respuesta_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearRespuesta(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->respuesta_opcion1(strtoupper(trim($objeto->getRespuestaOpcion1())));
        $this->respuesta_opcion2(strtoupper(trim($objeto->getRespuestaOpcion2())));
        $this->respuesta_opcion3(strtoupper(trim($objeto->getRespuestaOpcion3())));
        $this->respuesta_opcion4(strtoupper(trim($objeto->getRespuestaOpcion4())));
        $this->respuesta_opcion5(strtoupper(trim($objeto->getRespuestaOpcion5())));
        $this->respuesta_estado(strtoupper(trim($objeto->getRespuestaEstado())));
        
        if(!$edicion){
            $this->respuesta_verdadera(strtoupper(trim($objeto->getRespuestaVerdadera())));
        }
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarRespuesta(){
        return $this->delete();
    }
}
