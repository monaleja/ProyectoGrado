<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "todo_persona";
    protected $primaryKey = "persona_id";
    public $timestamps = false;

    /**
     * @comentario: método para crear o actualizar un registro a partir de un Object y una variable boolean.
     * @param Object $objeto
     * @param $edicion
     * @autor: Alejandra
     * @fecha: 2016-05-02
     * @return bool
     */
    public function crearPersona(Object $objeto,$edicion){
        $this->sede_id(trim($objeto->getSedeId()));
        $this->persona_tipodocumento(strtoupper(trim($objeto->getPersonaTipodocumento())));
        $this->persona_expide(trim($objeto->getPersonaExpide()));
        $this->persona_nombres(strtoupper(trim($objeto->getPersonaNombres())));
        $this->persona_apellidos(strtoupper(trim($objeto->getPersonaApellidos())));
        $this->persona_email(trim($objeto->getPersonaEmail()));
        $this->persona_fechanace(trim($objeto->getPersonaFechanace()));
        $this->persona_vive(trim($objeto->getPersonaVive()));
        $this->persona_sexo(strtoupper(trim($objeto->getPersonaSexo())));
        $this->persona_rh(strtoupper(trim($objeto->getPersonaRh())));
        $this->persona_direccion(strtoupper(trim($objeto->getPersonaDireccion())));
        $this->persona_telefono(trim($objeto->getPersonaTelefono()));
        $this->persona_estrato(trim($objeto->getPersonaEstrato()));
        $this->persona_ciudad_nace(trim($objeto->getPersonaCiudadNace()));
        $this->persona_eps(trim($objeto->getPersonaEps()));
        $this->persona_civil(strtoupper(trim($objeto->getPersonaCivil())));
        $this->persona_discapacidad(trim($objeto->getPersonaDiscapacidad()));
        $this->etnia_id(trim($objeto->getEtniaId()));
        $this->persona_foto(trim($objeto->getPersonaFoto()));
        $this->persona_huella(trim($objeto->getPersonaHuella()));
        $this->persona_firma(trim($objeto->getPersonaFirma()));
        $this->persona_instructorpermiso(trim($objeto->getPersonaInstructorpermiso()));
        $this->persona_instructorvencepermiso(trim($objeto->getPersonaInstructorvencepermiso()));
        $this->persona_instructorhojavida(trim($objeto->getPersonaInstructorhojavida()));

        if(!$edicion){
            $this->persona_documento(trim($objeto->getPersonaDocumento()));
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
    public function eliminarPersona(){
        return $this->delete();
    }
}