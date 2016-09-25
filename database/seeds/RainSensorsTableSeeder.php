<?php


use App\RainSensor;
use Illuminate\Database\Seeder;

class RainSensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // this is one user
        RainSensor::create([
            'name' => 'sensor1',
            'raining' => 0
        ]);

    }
}
