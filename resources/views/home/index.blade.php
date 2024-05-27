<x-ui-layout>
    <div class="showall pb-2">


        @foreach ($allcomics as $comic)
            <x-table-structure :datarep='$comic'></x-table-structure>
        @endforeach
    </div>
</x-ui-layout>
