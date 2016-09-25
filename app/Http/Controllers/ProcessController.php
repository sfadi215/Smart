<?php

namespace App\Http\Controllers;

use App\Control;
use App\RainSensor;
use App\State;
use App\Temperature;
use App\WaterLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        // we will get temperatures here as well to pass them to home view
        $temps = collect(Temperature::getLatest())->keyBy('sensor_id');
        // get water level value(s) and pass to view
        $waterLevel = WaterLevel::getLatest()->first();

        $rainSensor = RainSensor::getLatest()->first();
        // pass it to the view
        return view('home', compact('controls','temps','waterLevel','rainSensor'));
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
