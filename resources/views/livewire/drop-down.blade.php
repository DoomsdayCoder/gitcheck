<div class="position-relative">
    <button class="btn entry var-3" x-on:click='$wire.set("showdropdown",1)'>
        <img width="100%" height="100%" src="{{ asset($image) }}" alt="profile" class="rounded-circle img-fluid">
    </button>

    @if ($showdropdown)
        <div class="card profile-drop-down position-absolute top-100 end-0 bg-transparent mt-2" @click.outside='$wire.set("showdropdown",0)'>
            <div class="card-header text-capitalize  d-flex gap-3 align-items-center bg-darker">
                <img width="40" height="40" src="{{ asset($image) }}" alt="profile"
                    class="rounded-circle img-fluid">
                <h4 class="m-0 fw-semibold profile-name">{{ auth()->user()->username }}</h4>
            </div>
            <div class="card-body fs-6">
                <a href="">
                    <i class="bi bi-pencil-square"></i>&nbsp;
                    Edit Profile
                </a>
                <a href="">
                    <i class="bi bi-gear-fill"></i>&nbsp;
                    Settings
                </a>
                <a href="/logout" class="btn btn-primary">logout&nbsp;&nbsp;<i class="bi bi-box-arrow-right"></i></a>
            </div>

        </div>
    @endif

</div>
