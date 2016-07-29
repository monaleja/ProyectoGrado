<?php

namespace App\Http\Controllers;

use App\ORM\Usuario as user;

class Usuario extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = user::all();

        return view("usuario",["usuarios"=>$users]);
    }

    public function show($id)
    {

    }

    public function destroy($id)
    {
        return "OK";
    }
}
