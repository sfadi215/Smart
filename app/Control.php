<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Control extends Model
{
    protected $fillable = ['name','type','dependsOn','lastValue'];


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
        $this->runProcess($this->name . $this->lastValue);
    }

    private function runProcess($processName)
    {
        // use this code to run a bat file
        $processFilename = $processName . '.bat';
        exec('C:\xampp\htdocs\smart\process\\' . $processFilename);

        Log::info('Running process: ' .$processName);
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
