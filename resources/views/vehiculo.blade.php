@extends('layout.masterLayout')
@section('tittle','Vehículo')
@section('tittlePage','Formulario de Vehículo')

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
                    <label for="vehiculo_id">Código</label>
                    <label id="vehiculo_id"></label>
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_sede">Sede</label>
                    {!! Form::select('vehiculo_sede',
                        array_pluck($sede,'sede_nombre','sede_id'),
                    null,['class' => 'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_placa">Placa</label>
                    {!! Form::text('vehiculo_placa',null,['class'=>'form-control','placeholder'=>'Placa','required'=>'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="vehiculo_tipo">Tipo</label>
                    {!! Form::select('vehiculo_tipo',
                        array('1'=>'Moto','2'=>'Carro','3'=>'Camión','4'=>'Bus'),
                        null,['class'=>'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                     !!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_fechacompra">Fecha Compra</label>
                    {!!Form::text('vehiculo_fechacompra', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha compra'))!!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_valor">Valor</label>
                    {!! Form::text('vehiculo_valor',null,['class'=>'form-control','placeholder'=>'Valor']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="vehiculo_combustible">Combustible</label>
                    {!! Form::select('vehiculo_combustible',
                       array('1'=>'Gasolina','2'=>'Diesel','3'=>'Gas'),
                       null,['class'=>'form-control','placeholder'=>'Seleccione uno','required'=>'required'])
                    !!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_tacometro">Tacometro</label>
                    {!! Form::text('vehiculo_tacometro',null,['class'=>'form-control','placeholder'=>'Tacometro']) !!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_tarjeta">Tarjeta</label>
                    {!! Form::text('vehiculo_tarjeta',null,['class'=>'form-control','placeholder'=>'Número tarjeta propiedad']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="vehiculo_tecnico">Técnico</label>
                    {!! Form::text('vehiculo_tecnico',null,['class'=>'form-control','placeholder'=>'Tecnico mecánica']) !!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_vence_tecnico">Fecha Vencimiento Técnico Mecanica</label>
                    {!!Form::text('vehiculo_vence_tecnico', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha vencimiento tecnico mecanica'))!!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_soat">Soat</label>
                    {!! Form::text('vehiculo_soat',null,['class'=>'form-control','placeholder'=>'Número soat','required'=>'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="vehiculo_vence_soat">Fecha Vencimiento Soat</label>
                    {!!Form::text('vehiculo_vence_soat', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha vencimiento soat','required'=>'required'))!!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_ult_aceite">Fecha Último Cambio Aceite</label>
                    {!!Form::text('vehiculo_ult_aceite', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha último cambio aceite','required'=>'required'))!!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_ult_filtros">Fecha Último Cambio Filtros</label>
                    {!!Form::text('vehiculo_ult_filtros', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha último cambio filtros','required'=>'required'))!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="vehiculo_ult_frenos">Fecha Último Cambio Bandas</label>
                    {!!Form::text('vehiculo_ult_frenos', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha último cambio bandas','required'=>'required'))!!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_ult_motor">Fecha Último Revisión Motor</label>
                    {!!Form::text('vehiculo_ult_motor', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha último revisión motor','required'=>'required'))!!}
                </div>
                <div class="col-md-4">
                    <label for="vehiculo_llantas">Fecha Cambio Llantas</label>
                    {!!Form::text('vehiculo_llantas', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha cambio llantas','required'=>'required'))!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="vehiculo_balanceo">Fecha Último Balanceo</label>
                    {!!Form::text('vehiculo_balanceo', null, array('class'=>'form-control datepicker', 'placeholder'=>'Fecha último balanceo','required'=>'required'))!!}
                </div>
            </div>

            <br>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::submit("Grabar",["class"=>"btn btn-primary"]) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>

@endsection