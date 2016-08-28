@extends('layout.masterLayout')
@section('title','Matrícula')
@section('tittlePage','Formulario de Matrícula')

@section('content')

    <div class="x_panel" style="height:100%;position:relative;">

        <div class="x_title">
            <h2>Datos Basicos</h2>
            @include("partials.colapse")
        </div>

        <div class="x_content">
            {!! Form::open(array("action"=>"Matricula@store","method"=>"post","class"=>"form-horizontal")) !!}

            <div class="form-group">
                <div class="col-md-4">
                    <label for="matricula_id">Código</label>
                    <label id="matricula_id"></label>
                </div>
                <div class="col-md-4">
                    <label for="matricula_sede">Sede</label>
                    {!! Form::select('matricula_sede',
                        array_pluck($sede,'sede_nombre','sede_id'),
                    null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="matricula_alumno">Alumno</label>
                    {!! Form::select('matricula_alumno',
                        array_pluck($alumno,'usuario_login','usuario_id'),
                    null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>

            <div class="form-group">
                 <div class="col-md-4">
                    <label for="matricula_categoria">Categoría</label>
                    {!! Form::select('matricula_categoria',
                        array_pluck($categoria,'categoria_nombre','categoria_id'),
                    null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="matricula_valor">Valor</label>
                    {!! Form::text('matricula_valor',null,['class'=>'form-control','placeholder'=>'Valor','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="matricula_contado">Contado</label>
                    {!! Form::select('matricula_contado',
                        array('1'=>'SI','0'=>'NO'),
                        null,['class' => 'form-control','required'=>'required'])
                    !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">

                    <label for="matricula_abono">Abono</label>
                    {!! Form::text('matricula_abono',null,['class'=>'form-control','placeholder'=>'Valor abono','required'=>'required']) !!}
                </div>
                <div class="col-md-4">
                    <label for="matricula_fechainicia">Fecha Inicia</label>
                    {!! Form::label('matricula_fechainicia',Carbon\Carbon::now()->toDateString(),['class'=>'form-control','required'=>'required']) !!}
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
@endsection