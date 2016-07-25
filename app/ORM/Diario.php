<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $table = "todo_diario";
    protected $primaryKey = "diario_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-03
     * @return bool
     */
    public function crearDiario(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->matricula_id(trim($objeto->getMatriculaId()));
        $this->alumno_id(trim($objeto->getAlumnoId()));
        $this->instructor_id(trim($objeto->getInstructorId()));
        $this->diario_fecha(trim($objeto->getDiarioFecha()));
        $this->servicio_id(trim($objeto->getServicioId()));
        $this->diario_teoria(trim($objeto->getDiarioTeoria()));
        $this->diario_teoria_horas(trim($objeto->getDiarioTeoriaHoras()));
        $this->diario_teoria_observa(strtoupper(trim($objeto->getDiarioTeoriaObserva())));
        $this->diario_practica(trim($objeto->getDiarioPractica()));
        $this->diario_practica_horas(trim($objeto->getDiarioPracticaHoras()));
        $this->diario_practica_observa(strtoupper(trim($objeto->getDiarioPracticaObserva())));
        $this->diario_taller(trim($objeto->getDiarioTaller()));
        $this->diario_taller_horas(trim($objeto->getDiarioTallerHoras()));
        $this->diario_taller_observa(strtoupper(trim($objeto->getDiarioTallerObserva())));
        $this->vehiculo_id(trim($objeto->getVehiculoId()));
        $this->diario_video(trim($objeto->getDiarioVideo()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-03
     */
    public function eliminarDiario(){
        return $this->delete();
    }
}
