<?php

use App\Control;
use Illuminate\Database\Seeder;

class ControlsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $controls = [
            [

                'name' => 'Room1LedSmart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],
            [
                'name' => 'Room1ShutterSmart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],
            [
                'name' => 'Room2LedSmart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],
            [
                'name' => 'Room2ShutterSmart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'Room3Led1Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'Room3Led2Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'Room3Led3Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'Room3Shutter1Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'Room3Shutter2Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'KitchenLed1Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'KitchenLed2Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'KitchenLed3Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'KitchenLed4Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'SittingLed1Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'SittingLed2Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'SittingLed3Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'SittingLed4Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'SittingLed5Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],

            [
                'name' => 'SittingLed6Smart',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],
            [
                'name' => 'Room1Led',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'Room1LedSmart'
            ],
            [
                'name' => 'Room2Led',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'Room2LedSmart'
            ],
            [
                'name' => 'Room3Led1',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'Room3Led1Smart'
            ],
            [
                'name' => 'Room3Led2',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'Room3Led2Smart'
            ],
            [
                'name' => 'Room3Led3',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'Room3Led3Smart'
            ],
            [
                'name' => 'KitchenLed1',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'KitchenLed1Smart'
            ],
            [
                'name' => 'KitchenLed2',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'KitchenLed2Smart'
            ],
            [
                'name' => 'KitchenLed3',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'KitchenLed3Smart'
            ],
            [
                'name' => 'KitchenLed4',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'KitchenLed4Smart'
            ],
            [
                'name' => 'SittingLed1',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'SittingLed1Smart'
            ],
            [
                'name' => 'SittingLed2',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'SittingLed2Smart'
            ],
            [
                'name' => 'SittingLed3',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'SittingLed3Smart'
            ],
            [
                'name' => 'SittingLed4',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'SittingLed4Smart'
            ],
            [
                'name' => 'SittingLed5',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'SittingLed5Smart'
            ],
            [
                'name' => 'SittingLed6',
                'type' => 'led',
                'lastValue' => null,
                'dependsOn' => 'SittingLed6Smart'
            ],

            [
                'name' => 'Room1Shutter',
                'type' => 'shutter',
                'lastValue' => null,
                'dependsOn' => 'Room1ShutterSmart'
            ],
            [
                'name' => 'Room2Shutter',
                'type' => 'shutter',
                'lastValue' => null,
                'dependsOn' => 'Room2ShutterSmart'
            ],
            [
                'name' => 'Room3Shutter1',
                'type' => 'shutter',
                'lastValue' => null,
                'dependsOn' => 'Room3Shutter1Smart'
            ],
            [
                'name' => 'Room3Shutter2',
                'type' => 'shutter',
                'lastValue' => null,
                'dependsOn' => 'Room3Shutter2Smart'
            ],
            [
                'name' => 'Away',
                'type' => 'switch',
                'lastValue' => null,
                'dependsOn' => null
            ],
            [
            'name' => 'Boiler',
            'type' => 'switch',
            'lastValue' => null,
            'dependsOn' => null
        ]
        ];

        Control::insert($controls);

    }
}
