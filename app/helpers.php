<?php

function getDisabledAttribute($value)
{
    return $value ? '' : 'disabled';
}

function getCheckedAttribute($value)
{
    return $value ? 'checked' : '';
}
