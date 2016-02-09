<?php

namespace App\Http\Controllers;

use App\Control;
use App\State;
use Illuminate\Http\Request;

class ProcessController extends Controller
{


    /**
     * ProcessController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $controls = Control::all()->keyBy('name');

        return view('home', compact('controls'));
    }

    public function process(Request $request)
    {


        $controlName = $request->get('controlName');
        $value = $request->get('value');



        $control = Control::where([
            'name' => $controlName,
        ])->first();

        $control->trigger($value);



        return 'OK';
    }
}
