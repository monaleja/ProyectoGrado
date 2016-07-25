<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = "todo_tipousuario";
    protected $primaryKey = "tipusu_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-01
     * @return bool
     */
    public function crearTipoUsuario(Object $objeto,$edicion){
        $this->tipusu_nombre(strtoupper(trim($objeto->getTipusuNombre())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-01
     */
    public function eliminarTipoUsuario(){
        return $this->delete();
    }
}