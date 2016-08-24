<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    <!-- Custom Theme Style -->
    {!! Html::style('assets/css/custom.css') !!}
    <!-- Date Picker -->
    {!! Html::style('assets/css/bootstrap-datepicker.min.css') !!}
    <!-- Autocomplete -->
    {!! Html::style('assets/css/jquery.autocomplete.css') !!}

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/home" class="site_title">
                        <i class="fa fa-car"></i>
                        <span>Conductor 2.0</span>
                    </a>
                </div>
                <div class="clearfix"></div>
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3><i class="fa fa-folder"></i>Modulos</h3><hr>

                        <ul class="nav side-menu">
                            <li>
                                <a href="/">
                                    <i class="fa fa-home"></i>Home
                                </a>
                            </li>
                            @foreach($data['modulos'] as $index => $modulo)
                            <li>
                                <a>
                                    <i class="fa fa-edit"></i>
                                        {{ $index }}
                                    <span class="fa fa-chevron-down">

                                    </span>
                                </a>
                                @foreach($modulo as $pagina => $ruta)
                                    <ul class="nav child_menu">
                                        <li><a href={{URL::to($ruta)}}>{{$pagina}}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/img.jpg" alt="">
                                    {{$data['nombreUsuario']}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="javascript:;"><i class="fa fa-user pull-right" aria-hidden="true"></i>  Profile</a>
                                </li>
                                <li><a href={{ route("logout") }}><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>@yield('tittlePage')</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-20 col-sm-20 col-xs-20">
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Conductor 2.0 - TodoSoft
            </div>
            <div class="clearfix"></div>
        </footer>

    </div>
</div>

<!-- jQuery -->
{!! Html::script('assets/js/jquery.min.js') !!}
<!-- Bootstrap -->
{!! Html::script('assets/js/bootstrap.min.js') !!}
<!-- FastClick -->
{!! Html::script('assets/js/fastclick.js') !!}
<!-- NProgress -->
{!! Html::script('assets/js/nprogress.js') !!}
<!-- Custom Theme Scripts -->
{!! Html::script('assets/js/custom.min.js') !!}
<!-- Date Picker -->
{!! Html::script('assets/js/bootstrap-datepicker.min.js') !!}
<!-- Autocomplete -->
{!! Html::script('assets/js/jquery.autocomplete.js') !!}

{!! Html::script('assets/js/jquery.autocomplete.min.js') !!}

{!! Html::script('assets/js/scriptAdicionales.js') !!}

</body>
</html>