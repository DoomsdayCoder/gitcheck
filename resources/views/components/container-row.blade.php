<div class="container px-3">
    <div {{$attributes-> merge(['class'=> "card",'style'=>''])}}>
        <div class="row g-0">
            {{$slot}}
        </div>
    </div>
</div>