<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "todo_servicio";
    protected $primaryKey = "servicio_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-02
     * @return bool
     */
    public function crearServicio(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->servicio_nombre(strtoupper(trim($objeto->getServicioNombre())));
        $this->servicio_naturaleza(strtoupper(trim($objeto->getServicioNaturaleza())));
        $this->servicio_valor(trim($objeto->getServicioValor()));
        $this->categoria_id(trim($objeto->getCategoriaId()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-02
     */
    public function eliminarServicio(){
        return $this->delete();
    }
}
