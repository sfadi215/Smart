<div class="shutter-controls">
    <div class="btn-group" role="group">
        <button class="btn btn-success btn-shutter"
                data-active-on={{$activeOn or  ''}} data-name="{{$control->name}}" data-action="Up"  {{ getDisabledAttribute($control->isDependentOn()) }}>
            Up
        </button>
        <button class="btn btn-primary btn-shutter"
                data-active-on={{$activeOn or  ''}} data-name="{{$control->name}}" data-action="Down"  {{ getDisabledAttribute($control->isDependentOn()) }}>
            Down
        </button>
        <button class="btn btn-danger btn-shutter"
                data-active-on={{$activeOn or  ''}} data-name="{{$control->name}}" data-action="Stop"  {{ getDisabledAttribute($control->isDependentOn()) }}>
            Stop
        </button>
    </div>
</div>