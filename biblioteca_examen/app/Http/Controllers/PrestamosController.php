<?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use Illuminate\Http\Request;
use App\Models\libro;
use App\Models\socios;

class PrestamosController extends Controller
{
    public function historial($idlibro){
        $datos = prestamos::where('libro_id','=', $idlibro)->get();
        return view('prestamos.historial', compact('datos'));
    }

    public function prestamo($idsocio){
        $datos = prestamos::where('socio_id','=', $idsocio)->get();
        return view('prestamos.prestamo', compact('datos'));
    }
}
