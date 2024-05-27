<div class="preview-box var-3 position-relative rounded-1">
    <x-preview-image id="preview-cover-image">
        {{ str_contains($img,'coverImage/') ? asset('storage/'.$img) : $img}}
    </x-preview-image>
    <div class="preview-overlay">
        <input class="my-auto form-control" type="file" name='cover_image' wire:model.live="image">
        {{-- <input type="text" class="form-control my-auto " name='cover_image_url' placeholder="#url" wire:model.live="image" autocomplete="off"> --}}
    </div>
</div>
