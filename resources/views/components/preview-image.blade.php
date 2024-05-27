<div {{$attributes->merge(['class'=> 'card overflow-hidden preview-cover bg-darker d-flex justify-content-center align-items-center'])}} >
    <img src="{{ $slot }}" id="{{$id}}"/>
</div>
