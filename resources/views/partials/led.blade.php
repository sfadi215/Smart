<div class="led-box">
    <input type="checkbox" class="led-checkbox" {{ getDisabledAttribute($control->isDependentOn()) }} {{ getCheckedAttribute($control->isOn()) }}
           data-name="{{ $control->name }}"
           data-active-on="{{$activeOn or ''}}"
           data-process-on-name="{{$control->onProcess()}}"
           data-process-off-name="{{$control->offProcess()}}">
    <div class="led"></div>
    <p>{{$label}}</p>
</div>