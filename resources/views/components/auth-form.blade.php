<x-auth-form-layout>
    <form action="{{ $defined["action"] }}" method="post">
        @csrf

        <h5 class="card-title fw-bold fs-2 mb-3">{{ $title }}</h5>
        <div class="card-text">
            <x-input-basic name='username' label='Username' aria-autocomplete="username"></x-input-basic>
            <x-input-password :loginpage='$defined["lgpg"]' aria-autocomplete="Password"></x-input-password>

            @if ($title == 'signup')
            <x-input-password name='password_confirmation' label='Confirm Password' placeholder="Confirm Password" aria-autocomplete="password_confirmation"></x-input-password>
            @endif
        </div>
        <button class="btn btn-primary mb-2" type='submit'>{{ $title  }}</button>
        <div class="link"><a href="/{{ $defined["href"] }}">{{ $defined["show"] }}</a></div>
    
    </form>
</x-auth-form-layout>