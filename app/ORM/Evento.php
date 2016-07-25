<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "todo_evento";
    protected $primaryKey = "evento_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearEvento(Object $objeto,$edicion){
        $this->evento_estado(trim($objeto->getEventoEstado()));

        if(!$edicion){
            $this->sede_id(trim($objeto->getSedeId()));
            $this->matricula_id(trim($objeto->getMatriculaId()));
            $this->evento_email(trim($objeto->getEventoEmail()));
            $this->examen_id(trim($objeto->getExamenId()));
            $this->evento_fecha(trim($objeto->getEventoFecha()));
            $this->evento_hora(trim($objeto->getEventoHora()));
            $this->evento_clave(trim($objeto->getEventoClave()));
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
    public function eliminarEvento(){
        return $this->delete();
    }
}
