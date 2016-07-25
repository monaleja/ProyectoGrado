<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "todo_sede";
    protected $primaryKey = "sede_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-07
     * @return bool
     */
    public function crearSede(Object $objeto,$edicion){
        $this->escuela_id(trim($objeto->getEscuelaId()));
        $this->sede_nombre(strtoupper(trim($objeto->getSedeNombre())));
        $this->sede_director(strtoupper(trim($objeto->getSedeDirector())));
        $this->sede_secretaria(strtoupper(trim($objeto->getSedeSecretaria())));
        $this->ciudad_id(trim($objeto->getCiudadId()));
        $this->sede_direccion(strtoupper(trim($objeto->getSedeDireccion())));
        $this->sede_barrio(strtoupper(trim($objeto->getSedeBarrio())));
        $this->sede_telefonos(trim($objeto->getSedeTelefonos()));
        $this->sede_email(trim($objeto->getSedeEmail()));
        $this->sede_web(trim($objeto->getSedeWeb()));
        $this->sede_dane(trim($objeto->getSedeDane()));
        $this->sede_aprobacion(trim($objeto->getSedeAprobacion()));
        $this->sede_logo(trim($objeto->getSedeLogo()));
        $this->sede_matriculas(trim($objeto->getSedeMatriculas()));
        $this->sede_recibos(trim($objeto->getSedeRecibos()));

        if(!$edicion){
            $this->sede_nit(trim($objeto->getSedeNit()));
        }
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-07
     */
    public function eliminarSede(){
        return $this->delete();
    }
}
