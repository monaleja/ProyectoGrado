@extends('layout.masterLayout')
@section('title','Matrícula')
@section('tittlePage','Formulario de Matrícula')

@section('content')

    <div class="x_panel" style="height:600px;">

        <div class="x_title">
            <h2>Datos Basicos</h2>
            @include("partials.colapse")
        </div>

        <div class="x_content">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_id">Código</label>
                    <label id="matricula_id"></label>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="matricula_sede">Sede</label>
                        {!! Form::select('matricula_sede',
                            array_pluck($sede,'sede_nombre','sede_id'),
                        null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                        !!}
                    </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_alumno">Alumno</label>
                    {!! Form::select('matricula_alumno',
                        array_pluck($alumno,'usuario_login','usuario_id'),
                    null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_categoria">Categoría</label>
                    {!! Form::select('matricula_categoria',
                        array_pluck($categoria,'categoria_nombre','categoria_id'),
                    null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_valor">Valor</label>
                    {!! Form::text('matricula_valor',null,['class'=>'form-control','placeholder'=>'Valor','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_contado">Contado</label>
                    {!! Form::select('matricula_contado',
                        array('1'=>'SI','0'=>'NO'),
                        null,['class' => 'form-control','required'=>'required'])
                    !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_abono">Abono</label>
                    {!! Form::text('matricula_abono',null,['class'=>'form-control','placeholder'=>'Valor abono','required'=>'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="matricula_fechainicia">Fecha Inicia</label>
                    {!! Form::label('matricula_fechainicia',Carbon\Carbon::now()->toDateString(),['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    {!! Form::submit("Grabar",["class"=>"btn btn-success"]) !!}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! Form::submit("Cancelar",["class"=>"btn btn-primary"]) !!}
                </div>
            </div>
        </div>
@endsection