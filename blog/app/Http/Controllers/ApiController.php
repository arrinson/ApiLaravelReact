<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Nota;

class ApiController extends Controller
{
    public function index()
    {
      $notas = Nota::all();
      return response()->json(['notas' => $notas]);
    }

    public function store(Request $request)
    {

        Nota::create([
             'nota' => $request->nota
         ]);

       return response()->json(['notas' => $request->nota]);

    }
}
