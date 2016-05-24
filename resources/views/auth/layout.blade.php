<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    <!-- Custom Theme Style -->
    {!! Html::style('assets/css/custom.css') !!}
</head>

<body style="background:#F7F7F7;">
<div class="">

    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">

        @yield('form')

        @yield('footer')

    </div>
</div>
</body>
</html>