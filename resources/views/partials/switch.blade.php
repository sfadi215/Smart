<label class="switch-label">{{$label}}:</label>
<div class="switch-container">
    <div class="onoffswitch">
        <input type="checkbox" class="onoffswitch-checkbox"
               data-name="{{ $name or '' }}"
               data-process-on-name="{{$onProcess}}"
               data-process-off-name="{{$offProcess}}">
        <label class="onoffswitch-label">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
</div>