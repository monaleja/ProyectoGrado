<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    protected $table = "todo_eps";
    protected $primaryKey = "eps_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearEps(Object $objeto,$edicion){
        $this->eps_nit(trim($objeto->getEpsNit()));
        $this->eps_nombre(strtoupper(trim($objeto->getEpsNombre())));
        $this->eps_direccion(strtoupper(trim($objeto->getEpsDireccion())));
        $this->eps_ciudad(trim($objeto->getCiudadId()));
        $this->eps_telefonos(trim($objeto->getEpsTelefonos()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarEps(){
        return $this->delete();
    }
}
