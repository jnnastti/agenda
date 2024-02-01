<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->get('id');

        //return response('teste', 200);

        return view('day', [
            'usuario' => "Janna"
        ]);
    }
}
