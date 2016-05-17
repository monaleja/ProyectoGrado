<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "todo_usuario";
    protected $primaryKey = "usuario_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-02
     * @return bool
     */
    public function crearUsuario(Object $objeto,$edicion){
        $date = Carbon::now();
        $this->tipusu_id(trim($objeto->getTipusuId()));
        $this->usuario_clave(trim(md5($objeto->getUsuarioClave())));
        $this->usuario_estado(strtoupper(trim($objeto->getUsuarioEstado())));
        $this->rol_id(trim($objeto->getRolId()));

        if(!$edicion){
            $this->usuario_login(strtoupper(trim($objeto->getUsuarioLogin())));
            $this->usuario_fechaingreso(trim($objeto->getUsuarioFechaingreso)); //$date->format('Y-m-d')
            $this->persona_id(trim($objeto->getPersonaId()));
        }
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-02
     */
    public function eliminarUsuario(){
        return $this->delete();
    }
}