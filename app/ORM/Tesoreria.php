<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesoreria extends Model
{
    protected $table = "todo_tesoreria";
    protected $primaryKey = "tesoreria_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-04
     * @return bool
     */
    public function crearTesoreria(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->alumno_id(trim($objeto->getAlumnoId()));
        $this->tesoreria_fecha(trim($objeto->getTesoreriaFecha()));
        $this->servicio_id(trim($objeto->getServicioId()));
        $this->tesoreria_naturaleza(strtoupper(trim($objeto->getTesoreriaNaturaleza())));
        $this->tesoreria_valor(trim($objeto->getTesoreriaValor()));
        $this->tesoreria_recibo(trim($objeto->getTesoreriaRecibo()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-04
     */
    public function eliminarTesoreria(){
        return $this->delete();
    }
}
