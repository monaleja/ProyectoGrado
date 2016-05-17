<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = "todo_examen";
    protected $primaryKey = "examen_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-03
     * @return bool
     */
    public function crearExamen(Object $objeto,$edicion){
        $date = Carbon::now();
        $this->sede_id(trim($objeto->getSedeId()));
        $this->categoria_id(trim($objeto->getCategoriaId()));
        $this->instructor_id(trim($objeto->getInstructorId()));
        $this->examen_tiempo(trim($objeto->getExamenTiempo()));
        $this->examen_numeropreguntas(trim($objeto->getExamenNumeropreguntas()));
        $this->examen_aprobo(trim($objeto->getExamenAprobo()));
        $this->examen_noaprobo(trim($objeto->getExamenNoaprobo()));
        $this->examen_estado(trim($objeto->getExamenEstado()));
        $this->examen_fechacreacion($date->format('Y-m-d'));
        $this->usuario_id(trim($objeto->getUsuarioId()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-03
     */
    public function eliminarExamen(){
        return $this->delete();
    }
}