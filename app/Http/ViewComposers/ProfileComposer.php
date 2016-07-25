<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;


class ProfileComposer
{
    public function compose(View $view)
    {
        $user = \Auth::user();
        $data = array();
        $data['nombreUsuario'] = $user->getPersona->persona_nombres;

        $paginas = array();
        $k = 0;



        foreach ($user->getRol->getPermiso as $permiso) {
            foreach($permiso->getRecurso as $recurso){
                $paginas[$recurso->recurso_modulo][$recurso->recurso_nombre] = $recurso->recurso_ruta;
                $k++;
            }
        }
        $data['modulos'] = $paginas;

        $view->with('data',$data);
    }
}