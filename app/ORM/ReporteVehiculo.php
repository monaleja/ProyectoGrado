<?php

namespace App\ORM;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class ReporteVehiculo extends Model
{
    protected $table = "todo_reportevehiculo";
    protected $primaryKey = "repveh_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-08-23
     * @return bool
     */
    public function crearReporte(Object $objeto,$edicion)
    {
        $this->repveh_longitud(trim($objeto->getRepvehLongitud()));
        $this->repveh_latitud(trim($objeto->getRepvehLatitud()));
        $this->repveh_orientacion(trim($objeto->getRepvehOrientacion()));

        if(!$edicion){
            $this->ageins_id(trim($objeto->getAgeninsId()));
        }
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-08-23
     */
    public function eliminarReporte(){
        return $this->delete();
    }
}
?>