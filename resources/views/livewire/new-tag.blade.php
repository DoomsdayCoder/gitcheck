<div class="modal-content bg-modal-darker">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">New Tag</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form wire:submit.prevent="createTag">
        @csrf
        <div class="modal-body">
            <label for="tg" class="form-label">Tag Name</label>
            <input type="text" class="form-control" placeholder="Tag Name" wire:model='tag_name' @input.debounce.500ms='$wire.set("$msg",null)'>
            @error('tag_name')
                <div class="text-muted p-0 m-0">{{ $message }}</div>
            @enderror
            @if ($msg)
                <div class="text-muted p-0 m-0">{{ $msg }}</div>
            @endif
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type='submit'>Create Tag</button>
        </div>
    </form>
</div>
