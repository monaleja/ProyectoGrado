@extends('auth.layout')

@section('form')
    <div id="login" class=" form">
        <section class="login_content">
            <form>
                <h1>Login Form</h1>
                <div>
                    <input type="text" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                    <a class="btn btn-default submit" href="home">Log in</a>
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                    <p class="change_link">New to site?
                        <a href="#toregister" class="to_register"> Create Account </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                        <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection