<?php

namespace App\Http\Controllers;

use App\Models\Day;
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

    public function store(Request $request)
    {
        $humor = $request->input('humor');

        $dia = new Day();

        $dia->humor = $humor;
        $dia->save();

        return redirect('/dia');
    }
}
