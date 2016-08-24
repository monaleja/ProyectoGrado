<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class RespuestaExamen extends Model
{
    protected $table = "todo_respuestaexamen";
    protected $primaryKey = "resexa_id";
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
        $this->pregunta_id(trim($objeto->getPreguntaId()));
        $this->opcres_id(trim($objeto->getOpcresId()));
        $this->examen_id(trim($objeto->getExamenId()));
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
