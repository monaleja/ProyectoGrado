<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = "todo_recurso";
    protected $primaryKey = "recurso_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-01
     * @return bool
     */
    public function crearRecurso(Object $objeto,$edicion){
        $this->recurso_nombre(strtoupper(trim($objeto->getRecursoNombre())));
        $this->recurso_modulo(strtoupper(trim($objeto->getRecursoModulo())));
        $this->recurso_ruta(strtoupper(trim($objeto->getRecursoRuta())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-01
     */
    public function eliminarRecurso(){
        return $this->delete();
    }
}