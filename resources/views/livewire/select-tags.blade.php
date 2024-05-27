<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content bg-modal-darker">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalLabel">Select Tags</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-wrap gap-3 SelectSelectedButtons">
            @if (count($tags) == 0)
                <div class="text-muted fs-6">No tags found</div>
            @endif
            
            @foreach ($tags as $tag)
                <div class="tagSelection d-flex border" data-id='container' data-val='{{ $tag->tag_name }}'>
                    <label for="{{str_replace(' ', '', $tag->tag_name)}}" class="form-label my-auto me-2" data-id='label'>{{ $tag->tag_name }}</label>
                    <input type="checkbox" class="selTags my-auto" id="{{str_replace(' ', '', $tag->tag_name)}}" value="{{ $tag->tag_name }}" data-id='input'>
                </div>
            @endforeach
        </div>

    </div>
</div>
