@extends('layout.masterLayout')
@section('title','Usuario')
@section('tittlePage','Formulario de Usuario')

@section('content')

    <div class="x_panel" style="height:600px;">

        <div class="x_title">
            <h2>Datos Basicos</h2>
            @include("partials.colapse")
        </div>

        <div class="x_content">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_nombre">Nombre</label>
                    {!! Form::text('persona_nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_apellido">Apellido</label>
                    {!! Form::text('persona_apellido',null,['class'=>'form-control','placeholder'=>'Apellido','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usuario_login">Login</label>
                    {!! Form::text('usuario_login',null,['class'=>'form-control','placeholder'=>'Login','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usuario_password">Password</label>
                    {!! Form::password('usuario_password',['class'=>'form-control','placeholder'=>'Password','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_fechanace">Fecha Nacimiento</label>
                    {!!Form::text('persona_fechanace', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha Nacimiento','required'=>'required'))!!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipdoc_id">Tipo Documento</label>
                    {!! Form::select('tipo_documento',
                        array('TI'=>'Tarjeta Identidad','CC'=>'Cedula Ciudadanía'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_documento">Documento</label>
                    {!! Form::text('persona_documento',null,['class'=>'form-control','placeholder'=>'Documento','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ciudad_id">Lugar Expedición</label>
                    {!! Form::text('ciudad_expedicion',null,['class'=>'form-control','placeholder'=>'Ciudad','required'=>'required','id'=>'ac33333']) !!}
                    <input type="text" name="ciudad_expedicionn" id="ac3" placeholder="Search" class="form-control">
                    <input id="response" type="hidden" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_email">Email</label>
                    {!! Form::text('persona_email',null,['class'=>'form-control','placeholder'=>'Email','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_direccion">Dirección</label>
                    {!! Form::text('persona_direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required'=>'required']) !!}

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_vive">Ciudad Residencia</label>
                    {!! Form::select('persona_vive',
                       array_pluck($ciudad,'ciudad_nombre','ciudad_id'),
                       null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                   !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_sexo">Sexo</label>
                    {!! Form::select('persona_sexo',
                        array('M'=>'Masculino','F'=>'Femenino'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_rh">RH</label>
                    {!! Form::select('persona_rh',
                        array('A+','A-','O+','O-','B+','B-','AB+','AB-'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_telefono">Teléfono</label>
                    {!! Form::text('persona_telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required'=>'required']) !!}

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_estrato">Estrato</label>
                    {!! Form::select('persona_estrato',
                        array('1','2','3','4','5','6','7','8','9','10'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_ciudad_nace">Ciudad Nacimiento</label>
                    {!! Form::select('persona_ciudad_nace',
                        array(),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_eps">Eps</label>
                    {!! Form::select('persona_eps',
                        array_pluck($eps,'eps_nombre','eps_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_etnia">Etnia</label>
                    {!! Form::select('persona_etnia',
                        array_pluck($etnia,'etnia_nombre','etnia_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_sede">Sede</label>
                    {!! Form::select('persona_sede',
                        array_pluck($sede,'sede_nombre','sede_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_civil">Estado Civil</label>
                    {!! Form::select('persona_civil',
                        array('S'=>'Soltero','C'=>'Casado','D'=>'Divorciado'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="persona_discapacidad">Discapacidad</label>
                    {!! Form::select('persona_discapacidad',
                        array_pluck($discapacidad,'discapacidad_nombre','discapacidad_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usuario_tipousuario">Tipo Usuario</label>
                    {!! Form::select('usuario_tipousuario',
                        array_pluck($tipoUsuario,'tipusu_nombre','tipusu_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usuario_rol">Rol</label>
                    {!! Form::select('usuario_rol',
                        array_pluck($rol,'rol_nombre','rol_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    </br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! Form::submit("Grabar",["class"=>"btn btn-success"]) !!}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! Form::submit("Cancelar",["class"=>"btn btn-primary"]) !!}
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"‌​></script>

    <script>
        $( function() {
            $("#ac33333").autocomplete({
                data: {!! ($autocomplete) !!}
            });
        });

        jQuery(document).ready(function($) {
            $('#ac3').autocomplete({
                source:  "/autocomplete" ,
                minlength:1,
                select: function(event, ui) {
                    $('#response').val(ui.item.value);
                }
            });
        });
    </script>
@endsection}