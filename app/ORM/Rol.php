<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "todo_rol";
    protected $primaryKey = "rol_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-01
     * @return bool
     */
    public function crearRol(Object $objeto,$edicion){
        $this->rol_nombre(strtoupper(trim($objeto->getRolNombre())));
        $this->perfil_id(trim($objeto->getPerfilId()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-01
     */
    public function eliminarRol(){
        return $this->delete();
    }

    public function getPermiso()
    {
        return $this->hasMany('App\ORM\Permiso', 'perfil_id', 'perfil_id');
    }
    public function getPerfil()
    {
        return $this->belongsTo('App\Perfil', 'perfil_codigo', 'perfil_codigo');
    }

}