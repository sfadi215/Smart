<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function process(Request $request) {


        $processName = $request->get('process');
        $controlName = $request->get('controlName');
        $state = $request->get('value');

        $processFilename = $processName . '.bat';


        exec('C:\xampp\htdocs\smart\process\\'.$processFilename);



        if($controlName){

            $control = State::where([
                'process'=>$controlName,
            ])->first();

            if($control) {
                $control->value = $state;
                $control->save();
            }
            else {
                State::create([
                    'process' =>$controlName,
                    'value' => $state
                ]);
            }
        }

        return 'OK';
    }
}
