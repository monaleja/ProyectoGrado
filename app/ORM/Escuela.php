<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = "todo_escuela";
    protected $primaryKey = "escuela_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-03
     * @return bool
     */
    public function crearEscuela(Object $objeto,$edicion){
        $this->escuela_nit(trim($objeto->getEscuelaNit()));
        $this->escuela_nombre(strtoupper(trim($objeto->getEscuelaNombre())));
        $this->escuela_secretaria(strtoupper(trim($objeto->getEscuelaSecretaria())));
        $this->ciudad_id(trim($objeto->getCiudadId()));
        $this->escuela_direccion(strtoupper(trim($objeto->getEscuelaDireccion())));
        $this->escuela_barrio(strtoupper(trim($objeto->getEscuelaBarrio())));
        $this->escuela_telefonos(trim($objeto->getEscuelaTelefonos()));
        $this->escuela_email(trim($objeto->getEscuelaEmail()));
        $this->escuela_web(trim($objeto->getEscuelaWeb()));
        $this->escuela_dane(trim($objeto->getEscuelaDane()));
        $this->escuela_aprobacion(trim($objeto->getEscuelaAprobacion()));
        $this->escuela_logo(trim($objeto->getEscuelaLogo()));
        $this->escuela_matricula(trim($objeto->getEscuelaMatricula()));
        $this->escuela_rec_caja(trim($objeto->getEscuelaRecCaja()));
        $this->escuela_contrato(trim($objeto->getEscuelaContrato()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-03
     */
    public function eliminarEscuela(){
        return $this->delete();
    }
}
