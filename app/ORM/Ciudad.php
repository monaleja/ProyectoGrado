<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "todo_ciudad";
    protected $primaryKey = "ciudad_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-02
     * @return bool
     */
    public function crearCiudad(Object $objeto,$edicion){
        $this->ciudad_nombre(strtoupper(trim($objeto->getCiudadNombre())));
        $this->ciudad_dpto_nombre(strtoupper(trim(md5($objeto->getCiudadDptoNombre()))));
        $this->ciudad_dpto_vereda(strtoupper(trim($objeto->getCiudadDptoVereda())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-02
     */
    public function eliminarCiudad(){
        return $this->delete();
    }
}
