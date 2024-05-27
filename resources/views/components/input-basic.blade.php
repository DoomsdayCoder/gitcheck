@props(['req'=>''])
<div {{$attributes->merge(['class' => 'position-relative'])}}>
    @if (!empty($label))
        <label for='{{$name}}' class="form-label">{{$label}}</label>
    @endif
    <div class="position-relative">
        <input type="{{$type}}" name='{{$name}}' class="form-control text" placeholder="{{$placeholder}}"
            value="{{ !empty($value) ? $value : old($name) }}" style="text-transfom:none !important" {{$req}}>
    </div>
</div>