<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "todo_perfil";
    protected $primaryKey = "perfil_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-01
     * @return bool
     */
    public function crearPerfil(Object $objeto, $edicion){
        $this->perfil_nombre(strtoupper(trim($objeto->getPerfilNombre())));
        $this->perfil_descripcion(strtoupper(trim($objeto->getPerfilDescripcion())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-01
     */
    public function eliminarPerfil()
    {
        return $this->delete();
    }
}