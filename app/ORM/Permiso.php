<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "todo_permiso";
    protected $primaryKey = "permiso_id";
    public $timestamps = false;

    public function getRecurso()
    {
        return $this->hasMany('App\ORM\Recurso', 'recurso_id', 'recurso_id');
    }

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-01
     * @return bool
     */
    public function crearPermiso(Object $objeto,$edicion){
        $this->permiso_crear(trim($objeto->getPermisoCrear()));
        $this->permiso_modificar(trim($objeto->getPermisoModificar()));
        $this->permiso_eliminar(trim($objeto->getPermisoEliminar()));
        $this->permiso_consultar(trim($objeto->getPermisoConsultar()));
        $this->perfil_id(trim($objeto->getPerfilId()));
        $this->recurso_id(trim($objeto->getRecurosId()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-01
     */
    public function eliminarPermiso(){
        return $this->delete();
    }
}