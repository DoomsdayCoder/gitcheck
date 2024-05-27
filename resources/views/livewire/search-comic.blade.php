<div class="comic-search-bar position-relative align-self-lg-end py-2 px-2">
    <div class="position-relative" >
        <input wire:model.live.debounce.500ms='search' type="text" name="srch" class="form-control search-and-show w-100"
            placeholder="Search Comic" value="{{ old('srch') }}" aria-label="Search Bar" aria-describedby="Search"
            x-on:focus="$wire.set('showSearches', 1)" @click.outside = "$wire.set('showSearches', 0)">
        <button type="submit" class="btn search var-1">
            <i class="bi bi-search"></i>
        </button>
    </div>
    @if (sizeof($comics) > 0 && $showSearches > 0)
        <div class="card show-searches w-100 rounded-0 rounded-bottom">
            @foreach ($comics as $comic)
                <div class="d-flex align-items-center p-2">
                    <img src="{{ $comic->cover_image ? asset('storage/' . $comic->cover_image) : asset('local-images/no-image.png') }}"
                        alt="" style="object-fit: contain !important;" height="90" width="80"
                        class="rounded-1 me-3">
                    <a href='/viewmore/{{ $comic->id }}' class="show-comic-name m-0 fs-6 fw-semibold text-secondary show-name">
                        {{ $comic->name }}
                    </a>
                </div>
            @endforeach

        </div>
    @endif

</div>
