<div style="--bs-bg-opacity: 0.4;"
    class="flash-alert alert alert-dark px-3 py-2" role="alert" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show">
    {{ session('message') }}
</div>
