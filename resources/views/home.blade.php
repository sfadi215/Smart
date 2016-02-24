@extends('layout.master')

@section('content')
    <h1 class="page-header">Smart Home</h1>

    <form action="" method="post">

        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Room 1
                            @include('partials.temperature',['temp' => $temps['28 f2 68 97 06 00 00 9b']->value])
                        </h4>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED', 'control' => $controls['Room1LedSmart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['activeOn'=>'Room1LedSmartOn' ,'label' => 'LED 1', 'control' => $controls['Room1Led']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'Shutter', 'control' => $controls['Room1ShutterSmart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['control' => $controls['Room1Shutter'], 'activeOn'=>'Room1ShutterSmartOn'])
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>For All Home</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'Boiler', 'control' => $controls['Room2LedSmart']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'Away', 'control' => $controls['Away']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'All Shutters', 'control' => $controls['Room2ShutterSmart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['control' => $controls['Room2Shutter'], 'activeOn'=>'Room2ShutterSmartOn'])
                            </div>
                        </div>
                    </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Master BedRoom
                            @include('partials.temperature',['temp' => $temps['28 f2 68 97 06 00 00 9b']->value])
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 1 Smart', 'control' => $controls['Room3Led1Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'Main Light', 'activeOn'=>'Room3Led1SmartOn', 'control' => $controls['Room3Led1']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 2 Smart', 'control' => $controls['Room3Led2Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'Room Led', 'activeOn'=>'Room3Led2SmartOn', 'control' => $controls['Room3Led2']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 3 Smart', 'control' => $controls['Room3Led3Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'Spots', 'activeOn'=>'Room3Led3SmartOn', 'control' => $controls['Room3Led3']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'Shutter 1', 'control' => $controls['Room3Shutter1Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['control' => $controls['Room3Shutter1'], 'activeOn'=>'Room3Shutter1SmartOn'])
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'Shutter 2', 'control' => $controls['Room3Shutter2Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['control' => $controls['Room3Shutter2'], 'activeOn'=>'Room3Shutter2SmartOn'])
                            </div>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Kitchen</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 1 Smart', 'control' => $controls['KitchenLed1Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 1', 'activeOn'=>'KitchenLed1SmartOn', 'control' => $controls['KitchenLed1']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 2 Smart', 'control' => $controls['KitchenLed2Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'Hidden Light', 'activeOn'=>'KitchenLed2SmartOn', 'control' => $controls['KitchenLed2']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 3 Smart', 'control' => $controls['KitchenLed3Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 3', 'activeOn'=>'KitchenLed3SmartOn', 'control' => $controls['KitchenLed3']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 4 Smart', 'control' => $controls['KitchenLed4Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'Spots', 'activeOn'=>'KitchenLed4SmartOn', 'control' => $controls['KitchenLed4']])
                            </div>
                        </div>
                        <br/>

                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Sitting</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 1 Smart', 'control' => $controls['SittingLed1Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 1', 'activeOn'=>'SittingLed1SmartOn', 'control' => $controls['SittingLed1']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 2 Smart', 'control' => $controls['SittingLed2Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 2', 'activeOn'=>'SittingLed2SmartOn', 'control' => $controls['SittingLed2']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 3 Smart', 'control' => $controls['SittingLed3Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 3', 'activeOn'=>'SittingLed3SmartOn', 'control' => $controls['SittingLed3']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 4 Smart', 'control' => $controls['SittingLed4Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 4', 'activeOn'=>'SittingLed4SmartOn', 'control' => $controls['SittingLed4']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 5 Smart', 'control' => $controls['SittingLed5Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 5', 'activeOn'=>'SittingLed5SmartOn', 'control' => $controls['SittingLed5']])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['label'=> 'LED 6 Smart', 'control' => $controls['SittingLed6Smart']])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['label' => 'LED 6', 'activeOn'=>'SittingLed6SmartOn', 'control' => $controls['SittingLed6']])
                            </div>
                        </div>
                        <br/>

                    </div>
                </div>

            </div>
        </div>


    </form>


@endsection

@section('scripts')
    <script src="/assets/js/home.js"></script>
@endsection