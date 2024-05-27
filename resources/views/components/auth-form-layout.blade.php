@if ($errors->any())
    <div class="alert alert-dark text-muted px-2 py-1 fixed-top mx-auto" role="alert" style="max-width: 540px;">
        <ul class="my-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<x-container-row class="mx-auto bg-transparent" style="max-width: 540px;">
    <div class="col-12 col-md-4 user-login-card-image">
    </div>

    <div class="col-md-8 d-flex flex-direction-column px-3">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>

</x-container-row>
<script defer>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.show-password').forEach(element => {
            element.addEventListener('click', e => {
                var btn = e.target;

                if (btn.previousElementSibling.type === 'password') {
                    btn.previousElementSibling.type = 'text';
                    return;
                }
                btn.previousElementSibling.type = 'password';

            })
        });
    })
</script>
