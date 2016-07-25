<?php

namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = "todo_vehiculo";
    protected $primaryKey = "vehiculo_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-03
     * @return bool
     */
    public function crearVehiculo(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->vehiculo_placa(strtoupper(trim($objeto->getVehiculoPlaca())));
        $this->vehiculo_tipo(strtoupper(trim($objeto->getVehiculoTipo())));
        $this->vehiculo_compra(trim($objeto->getVehiculoCompra()));
        $this->vehiculo_valor(trim($objeto->getVehiculoValor()));
        $this->vehiculo_combustible(strtoupper(trim($objeto->getVehiculoCombustible())));
        $this->vehiculo_tacometro(trim($objeto->getVehiculoTacometro()));
        $this->vehiculo_tarjeta(trim($objeto->getVehiculoTarjeta()));
        $this->vehiculo_tecnico(trim($objeto->getVehiculoTecnico()));
        $this->vehiculo_vence_tecnico(trim($objeto->getVehiculoVenceTecnico()));
        $this->vehiculo_soat(trim($objeto->getVehiculoSoat()));
        $this->vehiculo_vence_soat(trim($objeto->getVehiculoVenceSoat()));
        $this->vehiculo_ult_aceite(trim($objeto->getVehiculoUltAceite()));
        $this->vehiculo_ult_filtros(trim($objeto->getVehiculoUltFiltros()));
        $this->vehiculo_ult_frenos(trim($objeto->getVehiculoUltFrenos()));
        $this->vehiculo_ult_motor(trim($objeto->getVehiculoUltMotor()));
        $this->vehiculo_llantas(trim($objeto->getVehiculoLlantas()));
        $this->vehiculo_balanceo(trim($objeto->getVehiculoBalanceo()));
        $this->vehiculo_foto(trim($objeto->getVehiculoFoto()));
        $this->vehiculo_vida(trim($objeto->getVehiculoVida()));
        return $this->save();
    }

    /**
     * @comentario: método para eliminar un registro.
     * @return bool|null
     * @throws \Exception
     * @autor: Alejandra
     * @fecha: 2016-05-03
     */
    public function eliminarVehiculo(){
        return $this->delete();
    }
}
