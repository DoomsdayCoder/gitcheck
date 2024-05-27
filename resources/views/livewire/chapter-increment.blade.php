<div class="d-flex flex-column align-items-start align-items-lg-end">
    <div class="d-flex gap-1 text-secondary">
        Upd on:
        <span class="stat-link ms-2">
            {{ $datetime->format('g:i:s a') }}
        </span>|<span class="stat-link">
            {{ $datetime->format('d/m/Y') }}
        </span>
    </div>

    @if (!empty($chapter))
        <div class="mt-3 d-flex gap-2 justify-content-end align-items-center text-secondary">
            Last read:
            <div>
                <input wire:model='chapter' wire:change='chpChanges()' type='number' class="form-control m-0" value="{{ $chapter }}">
            </div>
        </div>
    @endif

    <div class="crud-links gap-2 d-flex flex-column mt-lg-auto">
        <x-update-data-icon href='/updateComic/{{ $row->id }}'></x-update-data-icon>
        <button class="delete btn btn-danger text-dark" wire:click='delete' wire:confirm='{{$confirmation}}'><i class="bi bi-eraser-fill"></i></button>
    </div>
</div>
