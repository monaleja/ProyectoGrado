<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class OpcionRespuesta extends Model
{
    protected $table = "todo_opcionrespuesta";
    protected $primaryKey = "opcres_id";
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
        $this->opcres_opcion(strtoupper(trim($objeto->getOpcresOpcion())));
        $this->opcres_estado(strtoupper(trim($objeto->getOpcresEstado())));
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
