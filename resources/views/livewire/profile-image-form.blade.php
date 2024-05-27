<form class="px-3 d-flex flex-column" wire:submit="SubmitCategory">
    <div class="pi-images-box">
        @foreach ($fls as $imageName => $fileName)
            <div>
                <input type="radio" class='pi-select' name='piValue' id="{{ $imageName }}"
                    value="profile-images/{{ $fileName }}" wire:model="profile">
                <label class="pi-label rounded-circle" for="{{ $imageName }}"
                    style="background-image: url({{ asset('profile-images/' . $fileName) }}) !important;"></label>
            </div>
        @endforeach
    </div>


    <button class="btn btn-primary me-0 ms-auto my-3">Apply</button>

</form>
