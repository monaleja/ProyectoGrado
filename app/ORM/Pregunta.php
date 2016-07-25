<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = "todo_pregunta";
    protected $primaryKey = "pregunta_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearPregunta(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->categoria_id(trim($objeto->getCategoriaId()));
        $this->pregunta_examen(strtoupper(trim($objeto->getPreguntaExamen())));
        $this->pregunta_estado(strtoupper(trim($objeto->getPreguntaEstado())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarPregunta(){
        return $this->delete();
    }
}
