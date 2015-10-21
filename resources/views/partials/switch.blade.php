<label class="switch-label">{{$label}}:</label>
<div class="switch-container">
    <div class="onoffswitch">
        <input type="checkbox" class="onoffswitch-checkbox"  {{ getCheckedAttribute($control->isOn()) }}
               data-name="{{ $control->name }}"
               data-process-on-name="{{ $control->onProcess() }}"
               data-process-off-name="{{$control->offProcess() }}">
        <label class="onoffswitch-label">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
</div>