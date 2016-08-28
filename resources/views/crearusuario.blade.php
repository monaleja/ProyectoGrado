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
            {!! Form::open(array("action"=>"Usuario@store","method"=>"post","class"=>"form-horizontal")) !!}
            <div class="form-group">
                <div class="col-md-4">
                    <label for="persona_nombre">Nombre</label>
                    {!! Form::text('persona_nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_apellido">Apellido</label>
                    {!! Form::text('persona_apellido',null,['class'=>'form-control','placeholder'=>'Apellido','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_fechanace">Fecha Nacimiento</label>
                    {!!Form::text('persona_fechanace', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha Nacimiento','required'=>'required'))!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="tipdoc_id">Tipo Documento</label>
                    {!! Form::select('tipo_documento',
                        array('TI'=>'Tarjeta Identidad','CC'=>'Cedula Ciudadanía'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_documento">Documento</label>
                    {!! Form::text('persona_documento',null,['class'=>'form-control','placeholder'=>'Documento','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="ciudad_id">Lugar Expedición</label>
                    {!! Form::text('ciudad_expedicion',null,['class'=>'form-control','placeholder'=>'Ciudad','required'=>'required','id'=>'ac33333']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="persona_direccion">Dirección</label>
                    {!! Form::text('persona_direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_vive">Ciudad Residencia</label>
                    {!! Form::select('persona_vive',
                       array_pluck($ciudad,'ciudad_nombre','ciudad_id'),
                       null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                   !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_sexo">Sexo</label>
                    {!! Form::select('persona_sexo',
                        array('M'=>'Masculino','F'=>'Femenino'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="persona_telefono">Teléfono</label>
                    {!! Form::text('persona_telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_rh">RH</label>
                    {!! Form::select('persona_rh',
                        array('A+','A-','O+','O-','B+','B-','AB+','AB-'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_estrato">Estrato</label>
                    {!! Form::select('persona_estrato',
                        array('1','2','3','4','5','6','7','8','9','10'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="persona_ciudad_nace">Ciudad Nacimiento</label>
                    {!! Form::select('persona_ciudad_nace',
                        array(),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_eps">Eps</label>
                    {!! Form::select('persona_eps',
                        array_pluck($eps,'eps_nombre','eps_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_etnia">Etnia</label>
                    {!! Form::select('persona_etnia',
                        array_pluck($etnia,'etnia_nombre','etnia_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno'])
                    !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="persona_sede">Sede</label>
                    {!! Form::select('persona_sede',
                        array_pluck($sede,'sede_nombre','sede_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_civil">Estado Civil</label>
                    {!! Form::select('persona_civil',
                        array('S'=>'Soltero','C'=>'Casado','D'=>'Divorciado'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="persona_discapacidad">Discapacidad</label>
                    {!! Form::select('persona_discapacidad',
                        array_pluck($discapacidad,'discapacidad_nombre','discapacidad_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno'])
                    !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                        <label for="persona_email">Email</label>
                        {!! Form::text('persona_email',null,['class'=>'form-control','placeholder'=>'Email','required'=>'required']) !!}
                    </div>
            </div>

            <br>
            <h2>Datos Usuario</h2>
            <hr>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="usuario_login">Login</label>
                    {!! Form::text('usuario_login',null,['class'=>'form-control','placeholder'=>'Login','required'=>'required']) !!}
                </div>

                <div class="col-md-4">
                    <label for="usuario_password">Password</label>
                    {!! Form::password('usuario_password',['class'=>'form-control','placeholder'=>'Password','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="usuario_rol">Rol</label>
                    {!! Form::select('usuario_rol',
                        array_pluck($rol,'rol_nombre','rol_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>

            <br>
            <div class="form-group">
                <div class="col-md-4">
                    {!! Form::submit("Grabar",["class"=>"btn btn-primary"]) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scriptsAdicionales')
    <script>
        $(document).ready(function() {
            $("#ac33333").autocomplete({
                data: {!! ($autocomplete) !!}
            });
        });
    </script>
@endsection