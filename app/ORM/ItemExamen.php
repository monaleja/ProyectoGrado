<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class ItemExamen extends Model
{
    protected $table = "todo_itemexamen";
    protected $primaryKey = array('examen_id','pregunta_id');
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-04
     * @return bool
     */
    public function crearItemExamen(Object $objeto,$edicion){
        $this->examen_id(trim($objeto->getExamenId()));
        $this->pregunta_id(strtoupper(trim($objeto->getPreguntaId())));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-04
     */
    public function eliminarItemExamen(){
        return $this->delete();
    }

    /*
    public static function find($primaryOne, $PrimaryTwo) {
        return Widget::where('primaryOne', '=', $primaryOne)
            ->where('PrimaryTwo', '=', $PrimaryTwo)
            ->first();
    }
    */
}
