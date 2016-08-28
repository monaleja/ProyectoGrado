@extends('layout.masterLayout')
@section('title','Usuario')
@section('tittlePage','Formulario de Usuario')


@section('content')

    <div class="x_panel" style="height:100%;position:relative;">

        <div class="x_title">
            <h2>Datos Basicos</h2>
            @include("partials.colapse")
        </div>

        <div class="x_content">

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Usuario</th>
                    <th>Nombre - Apellido</th>
                    <th>Tipo</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr data-usuario={{$usuario->usuario_id}} >
                            <td>{{$usuario->usuario_id}}</td>
                            <td>{{$usuario->usuario_login}}</td>
                            <td>{{$usuario->getPersona->getNombreCompleto()}}</td>
                            <td>{{$usuario->getTipoUsuario->tipusu_nombre}}</td>
                            <td>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                {!! link_to_action('Usuario@show',
                                    $title = "Modificar",
                                    $parameters = [$usuario->usuario_id],
                                    $attributes = ["class"=>"btn btn-link "])!!}
                            </td>
                            <td><button type="button" class="btn btn-link btn-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! link_to_action('Usuario@create',
                                    $title = "Crear",
                                    [],
                                    $attributes = ["class"=>"btn btn-default btn-primary"])!!}
    </div>

@endsection

@include("partials.search.usuarioEliminar")

@section('scriptsAdicionales')
    {!! Html::script('assets/js/ajax/borrarUsuario.js') !!}
@stop
