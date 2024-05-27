<x-ui-layout>
    <x-folders_aplpha>
    </x-folders_aplpha>
    <form action="/deleteFolder" method="POST">
        @csrf
        @foreach ($fdr as $item)
        <div>
            <input name="folder_id" type="radio" id="{{$item->id}}" value="{{$item->id}}">
            <label for="{{$item->id}}">{{$item->folder_name}}</label>
        </div>
        @endforeach

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</x-ui-layout>