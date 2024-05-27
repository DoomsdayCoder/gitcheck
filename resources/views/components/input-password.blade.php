<div class="my-3 position-relative">
    <label for="{{ $name }}" class="form-label w-100">{{ $label }}</label>
    <div class="password_input_block position-relative">

        <input type="password" name='{{ $name }}' class="form-control" placeholder="{{ $placeholder }}"
            value="{{ old('password') }}">
        <i class="bi bi-eye show-password position-absolute top-50 end-0 translate-middle-y me-2 pe-auto"
            data-show= "false"></i>
    </div>
    @if ($loginpage)
        <a href="/forgotpassword">forgot password?</a>
    @endif
</div>
