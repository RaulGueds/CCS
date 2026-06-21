<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    public function update(Request $request)
    {
        $id = $request->id;

        return view('carta.update', compact('id'));
    }
}
