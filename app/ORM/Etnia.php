<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    protected $table = "todo_etnia";
    protected $primaryKey = "etnia_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearEtnia(Object $objeto,$edicion){
        $this->etnia_nombre(strtoupper(trim($objeto->getEtniaNombre())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarEtnia(){
        return $this->delete();
    }
}