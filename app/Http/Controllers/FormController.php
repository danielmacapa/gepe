<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function calcularSoma(Request $request)
    {
        $campo1 = $request->input('campo1');
        $campo2 = $request->input('campo2');
        $campo3 = $request->input('campo3');
        $campo4 = $request->input('campo4');

        $soma = $campo1 + $campo2 + $campo3 + $campo4;

        return response()->json(['soma' => $soma]);
    }
}
