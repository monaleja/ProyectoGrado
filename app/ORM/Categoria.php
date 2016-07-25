<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "todo_categoria";
    protected $primaryKey = "categoria_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-03
     * @return bool
     */
    public function crearCategoria(Object $objeto,$edicion){
        $this->categoria_nombre(strtoupper(trim($objeto->getCategoriaNombre())));
        $this->categoria_tipo(strtoupper(trim($objeto->getCategoriaTipo())));
        $this->categoria_teoria(trim($objeto->getCategoriaTeoria()));
        $this->categoria_practica(trim($objeto->getCategoriaPractica()));
        $this->categoria_taller(trim($objeto->getCategoriaTaller()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-03
     */
    public function eliminarCategoria(){
        return $this->delete();
    }
}
