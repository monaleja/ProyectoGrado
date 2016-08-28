<?php
namespace App\Http\Controllers;
use App\ORM\Vehiculo as veh;
use App\ORM\Sede;

class Vehiculo extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $vehiculo = veh::all();
        $sede = Sede::all();
        
        return view("vehiculo",["vehiculo"=>$vehiculo,"sede"=>$sede]);        
    }

    public function store()
    {

    }
}