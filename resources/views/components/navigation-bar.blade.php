<div class="navbarToggle my-auto d-md-none">
    <input type="checkbox" id="navToggleInput" class="d-none">
    <label for="navToggleInput"><i class="bi bi-three-dots-vertical"></i></label>
</div>

<div class="navigation-bar d-flex flex-column flex-md-row flex-lg-column justify-content-end justify-content-lg-start">
    <x-primary-button class="var-1" label='Homepage'>
        <i class="bi bi-house"></i>
    </x-primary-button>
    <x-primary-button href='/editprofile' class="var-1" label='Edit account details'>
        <i class="bi bi-pencil-square"></i>
    </x-primary-button>
    <x-primary-button href='/settings' class="var-1" label='Settings'>
        <i class="bi bi-gear-fill"></i>
    </x-primary-button>
    <form action="/logout" class='mb-lg-0 mt-lg-auto' method="post">
        @csrf
        <button type='submit' class="nv-links btn entry var-1"><i class="bi bi-box-arrow-right"></i></button>
    </form>
</div>

