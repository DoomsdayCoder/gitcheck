<form {{$attributes->merge(['class'=>""])}} action="{{$action}}" method="POST" enctype="{{$enctype}}">
    @csrf
    @method($method)
    {{$slot}}

</form>