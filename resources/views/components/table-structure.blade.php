<a href="/viewmore/{{ $datarep->id }}" class="show-comic-name">
    <div class="card p-2 bg-darker comic-card">
        <div class="card-img-top mb-2">
            <img src="{{ $datarep->cover_image ? asset('storage/' . $datarep->cover_image) : asset('local-images/no-image.png') }}"
                class="img-fluid rounded-1">
        </div>
        <div class="card-title show-name text-center fw-semibold fs-5">
            {{ $datarep->name }}
        </div>
        <hr class="m-0 mb-2">
        <p class="readStat mx-auto my-0 text-muted">
            {{ !empty($datarep->bookmark) ? 'ch ' . $datarep->bookmark : $datarep->reading_status }}
        </p>
    
    </div>
</a>
