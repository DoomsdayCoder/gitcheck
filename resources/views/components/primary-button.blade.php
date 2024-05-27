@props(['extra'=>''])
<div class="prime-btn-box d-flex align-items-center {{$extra}}" x-data="{open : false}" @mouseover.away="open = false">
    <a {{$attributes->merge(['class' => 'nv-links btn entry' ])}} href='{{$href}}' x-on:mouseover="open = true">
        {{$slot}}
    </a>

    <div class="prime-btn-label py-1 px-2 card position-absolute {{$labelClass}}">
        {{$label}}
    </div>
</div>