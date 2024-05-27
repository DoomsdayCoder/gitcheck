<x-ui-layout>
    @php
        $tags = $library->tags;
        $tagsArray = explode(',', $tags);
    @endphp
    <div class="card border border-0 rounded-0 trans pb-5 mb-5 mb-lg-0 pb-lg-0">

        <x-view-header>
            <div class="preview-box var-3">
                <x-preview-image>
                    {{ $library->cover_image ? asset('storage/' . $library->cover_image) : asset('local-images/no-image.png') }}
                </x-preview-image>
            </div>

            <div class="card-body var-2 d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-3">
                    <h5 class="card-title fw-bold fs-3 m-0">{{ $library->name }}</h5>
                    <div class="d-flex gap-2 text-secondary m-0">
                        Reading Status:<span class="card py-0 px-2 stat-link">{{ $library->reading_status }}</span>
                    </div>
                    <div class="d-flex gap-2 text-secondary m-0">
                        Manga Status:<span class="card py-0 px-2 stat-link">{{ $library->manga_status }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-secondary m-0">
                        Website:<a href="{{ $library->link }}" target="blank"
                            class="card py-1 px-2 link-success link-offset-1">{{ $library->link }}</a>
                    </div>
                </div>


                <div class="w-50 d-flex gap-1 text-secondary">
                    Tags:
                    <div class="d-flex gap-1 w-100 flex-wrap flex-lg-nowrap">
                        @if (count($tagsArray) > 1)
                            @foreach ($tagsArray as $tag)
                                <a href="/{{ $tag }}" class="btn btn-dark tag-link py-0 px-2 border">
                                    {{ $tag }}</a>
                            @endforeach
                        @else
                            <div class="tag-link py-0 px-2">No Tags Found</div>
                        @endif

                    </div>
                </div>
            </div>
            @livewire('chapter-increment', ['row' => $library, 'chapter' => $library->bookmark])

        </x-view-header>

        <div class="px-3">
            @if (auth()->user()->username == 'creator' || auth()->user()->username == 'Creator')
                @livewire('folder',['lib_id' => $library->id])
            @endif
            <h4 class="fs-6 text-muted fw-bold m-0">Review:</h4>
            <p class="card-text text-review text-light m-0 px-1">{{ $library->review }}</p>
        </div>

    </div>
</x-ui-layout>
