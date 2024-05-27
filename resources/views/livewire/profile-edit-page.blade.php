<div class="public-profile d-flex gap-lg-4">
    <div class="align-self-start position-relative">
        <div class="entry var-5">
            <img width="100%" height="100%"
                src="{{ !empty(auth()->user()->profile) ? asset('profile-images/' . auth()->user()->profile . '.jpg') : asset('profile-images/default-profile.jpg') }}"
                alt="profile" class="rounded-circle img-fluid">
        </div>

        <button class="btn entry var-1 profile-image-edit-icon" wire:click="ShowDefaultSelection()" >
            <i class="bi bi-pencil-square"></i>
        </button>
    </div>

    <div class="d-flex">
        <div class="vr"></div>
    </div>
    <div class="content-profile">
        <div class="profile-default-selection {{ $sds ? 'height-control' : '' }}">
            <div class="card profile-selection-container">

                <button class="btn ms-auto me-0 pi-selection-close" wire:click="CloseDefaultSelection()">
                    <i class="bi bi-x"></i>
                </button>

                @livewire('profile-image-form')
            </div>
        </div>
        <div class="align-self-center position-relative">
            <input type="text" class="form-control profile-name" wire:model="name"
                value="{{ auth()->user()->username }}" {{ $show ? '' : 'disabled' }}>
            <button class="btn search var-2 {{ $show ? 'd-none' : '' }}" wire:click='edit()'>
                <i class="bi bi-pencil-square"></i>
            </button>
            <button class="btn search var-2 {{ $show ? '' : 'd-none' }}" wire:click='edit()'>
                <i class="bi bi-upload"></i>
            </button>
        </div>

    </div>
</div>
