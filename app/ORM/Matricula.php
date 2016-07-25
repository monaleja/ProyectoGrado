<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = "todo_matricula";
    protected $primaryKey = "matricula_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-04
     * @return bool
     */
    public function crearMatricula(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->alumno_id(trim($objeto->getAlumnoId()));
        $this->categoria_id(trim($objeto->getCategoriaId()));
        $this->matricula_valor(trim($objeto->getMatriculaValor()));
        $this->matricula_abono(trim($objeto->getMatriculaAbono()));
        $this->matricula_contado(trim($objeto->getMatriculaContado()));
        $this->matricula_fecha_inicia(trim($objeto->getMatriculaFechaInicia()));
        $this->matricula_fecha_final(trim($objeto->getMatriculaFechaFinal()));
        $this->matricula_aprobo(trim($objeto->getMatriculaAprobo()));
        $this->examen_id(trim($objeto->getExamenId()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-04
     */
    public function eliminarMatricula(){
        return $this->delete();
    }
}