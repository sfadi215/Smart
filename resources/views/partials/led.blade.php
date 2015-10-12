<div class="led-box">
    <input type="checkbox" class="led-checkbox" disabled
           data-name="{{ $name or '' }}"
           data-active-on="{{$activeOn or ''}}"
           data-process-on-name="{{$onProcess}}"
           data-process-off-name="{{$offProcess}}">
    <div class="led"></div>
    <p>{{$label}}</p>
</div>