<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class ItemPregunta extends Model
{
    protected $table = "todo_itempregunta";
    protected $primaryKey = array('pregunta_id','respuesta_id');
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearItemPregunta(Object $objeto,$edicion){
        $this->pregunta_id(trim($objeto->getPreguntaId()));
        $this->respuesta_id(trim($objeto->getRespuestaId()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarItemPregunta(){
        return $this->delete();
    }
}
