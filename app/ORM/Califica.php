<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Califica extends Model
{
    protected $table = "todo_califica";
    protected $primaryKey = "califica_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearCalifica(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->matricula_id(trim($objeto->getMatriculaId()));
        $this->califica_fecha(trim($objeto->getCalificaFecha()));
        $this->examen_id(trim($objeto->getExamenId()));
        $this->califica_asistencia(trim($objeto->getCalificaAsistencia()));
        $this->califica_buenas(trim($objeto->getCalificaBuenas()));
        $this->califica_malas(trim($objeto->getCalificaMalas()));
        $this->califica_ip(trim($objeto->getCalificaIp()));
        $this->califica_entro(trim($objeto->getCalificaEntro()));
        $this->califica_salio(trim($objeto->getCalificaSalio()));
        $this->califica_aprobo(trim($objeto->getCalificaAprobo()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarCalifica(){
        return $this->delete();
    }
}
