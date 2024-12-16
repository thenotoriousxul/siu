<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReporteVentasController extends Controller
{
    public function index()
    {
        $ventas = DB::table('reporte_ventas_por_empleado')->get();

        return view('reporte_ventas.index', compact('ventas'));
    }
}
