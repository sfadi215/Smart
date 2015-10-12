<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    <!-- Bootstrap switch -->
    <link href="assets/css/app.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <h1 class="page-header">Smart Home</h1>

    <form action="" method="post">

        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Room 1</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room1LedSmartOn', 'offProcess' => 'Room1LedSmartOff', 'label'=> 'LED', 'name' =>'Room1LedSmart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'Room1LedOn', 'offProcess' => 'Room1LedOff', 'activeOn'=>'Room1LedSmartOn' ,'label' => 'LED 1', 'name' => 'Room1Led'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room1ShutterSmartOn', 'offProcess' => 'Room1ShutterSmartOff', 'label'=> 'Shutter', 'name' =>'Room1ShutterSmart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['upProcess'=> 'Room1ShutterUP', 'downProcess' => 'Room1ShutterDown', 'stopProcess'=> 'Room1ShutterStop', 'activeOn'=>'Room1ShutterSmartOn'])
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Room 2</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room2LedSmartOn', 'offProcess' => 'Room2LedSmartOff', 'label'=> 'LED', 'name' =>'Room2LedSmart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'Room2LedOn', 'offProcess' => 'Room2LedOff' ,'label' => 'LED 1', 'activeOn'=>'Room2LedSmartOn', 'name' =>'Room2Led'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room2ShutterSmartOn', 'offProcess' => 'Room2ShutterSmartOff', 'label'=> 'Shutter', 'name' =>'Room2ShutterSmart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['upProcess'=> 'Room2ShutterUP', 'downProcess' => 'Room2ShutterDown', 'stopProcess'=> 'Room2ShutterStop', 'activeOn'=>'Room2ShutterSmartOn'])
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Room 3</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room3Led1SmartOn', 'offProcess' => 'Room3Led1SmartOff', 'label'=> 'LED 1 Smart', 'name' =>'Room3Led1Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'Room3Led1On', 'offProcess' => 'Room3Led1Off' ,'label' => 'LED 1', 'activeOn'=>'Room3Led1SmartOn', 'name' =>'Room3Led1'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room3Led2SmartOn', 'offProcess' => 'Room3Led2SmartOff', 'label'=> 'LED 2 Smart', 'name' =>'Room3Led2Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'Room3Led2On', 'offProcess' => 'Room3Led2Off' ,'label' => 'LED 2', 'activeOn'=>'Room3Led2SmartOn', 'name' =>'Room3Led2'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room3Led3SmartOn', 'offProcess' => 'Room3Led3SmartOff', 'label'=> 'LED 3 Smart', 'name' =>'Room3Led3Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'Room3Led3On', 'offProcess' => 'Room3Led3Off' ,'label' => 'LED 3', 'activeOn'=>'Room3Led3SmartOn', 'name' =>'Room3Led3'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room3Shutter1SmartOn', 'offProcess' => 'Room3Shutter1SmartOff', 'label'=> 'Shutter 1', 'name' =>'Room3Shutter1Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['upProcess'=> 'Room3Shutter1UP', 'downProcess' => 'Room3Shutter1Down', 'stopProcess'=> 'Room3Shutter1Stop', 'activeOn'=>'Room3Shutter1SmartOn'])
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'Room3Shutter2SmartOn', 'offProcess' => 'Room3Shutter2SmartOff', 'label'=> 'Shutter 2', 'name' =>'Room3Shutter2Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.shutter',['upProcess'=> 'Room3Shutter2UP', 'downProcess' => 'Room3Shutter2Down', 'stopProcess'=> 'Room3Shutter2Stop', 'activeOn'=>'Room3Shutter2SmartOn'])
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
                                @include('partials.switch',['onProcess'=> 'KitchenLed1SmartOn', 'offProcess' => 'KitchenLed1SmartOff', 'label'=> 'LED 1 Smart', 'name' =>'KitchenLed1Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'KitchenLed1On', 'offProcess' => 'KitchenLed1Off' ,'label' => 'LED 1', 'activeOn'=>'KitchenLed1SmartOn', 'name' =>'KitchenLed1'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'KitchenLed2SmartOn', 'offProcess' => 'KitchenLed2SmartOff', 'label'=> 'LED 2 Smart', 'name' =>'KitchenLed2Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'KitchenLed2On', 'offProcess' => 'KitchenLed2Off' ,'label' => 'LED 2', 'activeOn'=>'KitchenLed2SmartOn', 'name' =>'KitchenLed2'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'KitchenLed3SmartOn', 'offProcess' => 'KitchenLed3SmartOff', 'label'=> 'LED 3 Smart', 'name' =>'KitchenLed3Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'KitchenLed3On', 'offProcess' => 'KitchenLed3Off' ,'label' => 'LED 3', 'activeOn'=>'KitchenLed3SmartOn', 'name' =>'KitchenLed3'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'KitchenLed4SmartOn', 'offProcess' => 'KitchenLed4SmartOff', 'label'=> 'LED 4 Smart', 'name' =>'KitchenLed4Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'KitchenLed4On', 'offProcess' => 'KitchenLed4Off' ,'label' => 'LED 4', 'activeOn'=>'KitchenLed4SmartOn', 'name' =>'KitchenLed4'])
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
                                @include('partials.switch',['onProcess'=> 'SittingLed1SmartOn', 'offProcess' => 'SittingLed1SmartOff', 'label'=> 'LED 1 Smart', 'name' =>'SittingLed1Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'SittingLed1On', 'offProcess' => 'SittingLed1Off' ,'label' => 'LED 1', 'activeOn'=>'SittingLed1SmartOn', 'name' =>'SittingLed1'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'SittingLed2SmartOn', 'offProcess' => 'SittingLed2SmartOff', 'label'=> 'LED 2 Smart', 'name' =>'SittingLed2Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'SittingLed2On', 'offProcess' => 'SittingLed2Off' ,'label' => 'LED 2', 'activeOn'=>'SittingLed2SmartOn', 'name' =>'SittingLed2'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'SittingLed3SmartOn', 'offProcess' => 'SittingLed3SmartOff', 'label'=> 'LED 3 Smart', 'name' =>'SittingLed3Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'SittingLed3On', 'offProcess' => 'SittingLed3Off' ,'label' => 'LED 3', 'activeOn'=>'SittingLed3SmartOn', 'name' =>'SittingLed3'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'SittingLed4SmartOn', 'offProcess' => 'SittingLed4SmartOff', 'label'=> 'LED 4 Smart', 'name' =>'SittingLed4Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'SittingLed4On', 'offProcess' => 'SittingLed4Off' ,'label' => 'LED 4', 'activeOn'=>'SittingLed4SmartOn', 'name' =>'SittingLed4'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'SittingLed5SmartOn', 'offProcess' => 'SittingLed5SmartOff', 'label'=> 'LED 5 Smart', 'name' =>'SittingLed5Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'SittingLed5On', 'offProcess' => 'SittingLed5Off' ,'label' => 'LED 5', 'activeOn'=>'SittingLed5SmartOn', 'name' =>'SittingLed5'])
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-xs-4">
                                @include('partials.switch',['onProcess'=> 'SittingLed6SmartOn', 'offProcess' => 'SittingLed6SmartOff', 'label'=> 'LED 6 Smart', 'name' =>'SittingLed6Smart'])
                            </div>
                            <div class="col-xs-8">
                                @include('partials.led',['onProcess'=> 'SittingLed6On', 'offProcess' => 'SittingLed6Off' ,'label' => 'LED 6', 'activeOn'=>'SittingLed6SmartOn', 'name' =>'SittingLed6'])
                            </div>
                        </div>
                        <br/>

                    </div>
                </div>

            </div>
        </div>


    </form>


</div>


<!-- Latest compiled and minified JavaScript -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>

    function triggerProcess(processName, controlName, value)
    {
        $.post('/process',{
            process: processName,
            controlName: controlName,
            value: value
        });
    }

    (function () {

        $('.onoffswitch-label').click(function () {
            var checkbox = $(this).siblings('input');
            checkbox.prop('checked', !checkbox.prop('checked')).change();
        });

        $('.led-box').click(function () {
            var checkbox = $(this).find('input');
            if(checkbox.is(':enabled')) {
                checkbox.prop('checked', !checkbox.prop('checked')).change();
            }
        });

        $('.onoffswitch-checkbox').change(function (e, value) {
            var $checkbox = $(this),
                    onProcessName;
            onProcessName = $(this).attr('data-process-on-name');
            if ($checkbox.is(':checked')) {
                $("[data-active-on='" + onProcessName +"']").removeAttr("disabled");
            }
            else {
                $("[data-active-on='" + onProcessName +"']").attr("disabled", true);
            }
        });

        // handle button click
        $('button[data-process-name]').click(function(e){
            e.preventDefault();

            var process = $(this).attr('data-process-name');
            triggerProcess(process);
        });

        // handle checkbox click
        $('input[type="checkbox"][data-process-on-name]').change(function(e){
            var $checkbox = $(this);
            if ($checkbox.is(':checked')) {
                triggerProcess($checkbox.data('process-on-name'), $checkbox.data('name'),'on');
            }
            else {
                triggerProcess($checkbox.data('process-off-name'), $checkbox.data('name'),'off');
            }
        });

    })();


</script>

</body>
</html>