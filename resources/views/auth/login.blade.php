@extends('auth.layout')

@section('form')

    <div id="login" class=" form">

        @include('partials.validationMessage')

        <section class="login_content">

            {!!  Form::open(array('route' => 'login',"method"=>"post")) !!}
            <h1>Inicio Sesion</h1>
            <div>
                <input type="text" class="form-control" placeholder="Usuario" name="usuario_login" required=""/>
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Contraseña" name="password" required=""/>
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">Iniciar Sesion</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
            </div>
            {!! Form::close() !!}
        </section>
    </div>
@endsection