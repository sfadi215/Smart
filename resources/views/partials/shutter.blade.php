<div class="shutter-controls">
    <div class="btn-group" role="group">
        <button class="btn btn-success" name="smart"
                data-active-on={{$activeOn or  ''}} data-process-name="{{$upProcess}}" disabled>
            Up
        </button>
        <button class="btn btn-primary" name="smart"
                data-active-on={{$activeOn or  ''}} data-process-name="{{$downProcess}}" disabled>
            Down
        </button>
        <button class="btn btn-danger" name="smart"
                data-active-on={{$activeOn or  ''}} data-process-name="{{$stopProcess}}" disabled>
            Stop
        </button>
    </div>
</div>