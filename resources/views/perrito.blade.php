<!DOCTYPE html>
<html>
    <head>
        <title>Formulario Perrito</title>
        {!! Html::style('assets/css/bootstrap.css') !!}
    </head>
    <body>

    {!! Form::open(array("action"=>["perrito@create"],"method"=>"post","class"=>"form-horizontal")) !!}

            <fieldset>

                <!-- Form Name -->
                <legend>Perrito</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre</label>
                    <div class="col-md-4">
                        <input id="textinput" name="perritoNombre" type="text" placeholder="nombre del perrito" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Raza</label>
                    <div class="col-md-4">
                        <input id="textinput" name="perritoRaza" type="text" placeholder="raza del perrito" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Fecha Nacimiento</label>
                    <div class="col-md-4">
                        {!! Form::date('perritoFecha', \Carbon\Carbon::now()) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">ID busqueda</label>
                    @if (isset($variable))
                        <div class="col-sm-4">
                            {!!Form::Text('perritoId',$variable->getPerritoId(),array('readonly'=>'true'))!!}
                        </div>
                    @else
                        <div class="col-sm-4">
                            {!!Form::Text('perritoId',null,array('readonly'=>'true'))!!}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre busqueda</label>
                        @if (isset($variable))
                            <div class="col-sm-4">
                                {!!Form::text('nombre',$variable->getPerritoNombre())!!}
                            </div>
                        @else
                            <div class="col-sm-4">
                                {!!Form::text('nombre',null)!!}
                            </div>
                        @endif
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Raza busqueda</label>
                    @if (isset($variable))
                        <div class="col-sm-4">
                            {!!Form::text('raza',$variable->getPerritoRaza())!!}
                        </div>
                    @else
                        <div class="col-sm-4">
                            {!!Form::text('raza',null)!!}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Fecha nacimiento busqueda</label>
                    @if (isset($variable))
                        <div class="col-sm-4">
                            {!!Form::Text('fecha',$variable->getPerritoFechanacimiento(),array('readonly'=>'true'))!!}
                        </div>
                    @else
                        <div class="col-sm-4">
                            {!!Form::Text('fecha',null,array('readonly'=>'true'))!!}
                        </div>
                    @endif
                </div>

                {!! Form::submit('Grabar',["class"=>"btn btn-success"]) !!} <!-- btn btn-success: propiedad de bootstrap -->

            </fieldset>
    {!! Form::close() !!}
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>
