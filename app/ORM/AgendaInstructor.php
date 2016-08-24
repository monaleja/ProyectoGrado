<?php

namespace App\ORM;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class AgendaInstructor extends Model
{
    protected $table = "todo_agendainstructor";
    protected $primaryKey = "ageins_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-08-23
     * @return bool
     */
    public function crearAgenda(Object $objeto,$edicion)
    {
        $this->instructor_id(trim($objeto->getInstructorId()));
        $this->alumno_id(trim($objeto->getAlumnoId()));
        $this->categoria_id(trim($objeto->getCategoriaId()));
        $this->vehiculo_id(trim($objeto->getVehiculoId()));
        $this->examen_id(trim($objeto->getExamenId()));
        $this->ageins_fechaclase(trim($objeto->getAgeinsFechaclase()));
        $this->ageins_horainicio(trim($objeto->getAgeinsHorainicio()));
        $this->ageins_horafin(trim($objeto->getAgeinsHorafin()));
        $this->ageins_observacion(trim($objeto->getAgeinsObservacion()));
        $this->ageins_fechamodificacion(trim($objeto->getAgeinsFechamodificacion()));

        if(!$edicion){
            $this->ageins_fechacreacion(trim($objeto->getAgeinsFechacreacion()));
            $this->ageins_horacreacion(trim($objeto->getAgeinsHoraCreacion()));
            $this->usuario_id(trim($objeto->getUsuarioId()));
        }
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-08-23
     */
    public function eliminarAgenda(){
        return $this->delete();
    }
}
?>