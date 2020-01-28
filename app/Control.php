<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Vinelab\Http\Client as HttpClient;

class Control extends Model
{
    protected $fillable = ['name','type','dependsOn','lastValue', 'controlRoute'];


    public function trigger($value)
    {

        $this->lastValue = $value;

        $this->save();

        if($this->type === 'switch' && $this->lastValue === 'Off'){
            $this->updateDependents('Off');
        }

        $this->activateProcess();


    }


    public function activateProcess()
    {
        $this->runProcess($this->name . $this->lastValue, $this->controlRoute);
    }

    private function runProcess($processName, $controlRoute = null)
    {
        if($controlRoute == null)
            $controlRoute = '192.168.1.6';

        // use this code to run a bat file
        //$processFilename = $processName . '.bat';
        //exec('C:\xampp\htdocs\smart\process\\' . $processFilename);

        Log::info('Running process fadi: ' .$processName);


        $contentLength = 0;

        $client = new HttpClient;

        $request = [

            'url' => "http://" . $controlRoute,
            'params' => [

                'key' => $processName

            ],

            'headers' => ['Content-Length:' . $contentLength]

        ];
        Log::info($request);
        $response = $client->get($request);
    }

    public function onProcess()
    {
        return $this->name . 'On';
    }

    public function offProcess()
    {
        return $this->name . 'Off';
    }

    public function isOn()
    {
        return $this->lastValue === 'On';
    }

    public function isDependentOn()
    {
        $dependent = Control::where(['name' => $this->dependsOn])->first();

        return $dependent->isOn();
    }

    public function updateDependents($value)
    {
        $dependents = Control::dependents()->get();

        foreach ($dependents as $dependent)
        {
            $dependent->trigger($value);
        }
    }

    public function scopeDependents($query)
    {
        return $query->where(['dependsOn' => $this->name]);
    }
}
