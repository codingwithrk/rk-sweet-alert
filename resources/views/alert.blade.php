@if (session('rk-alert'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: @json(session('rk-alert.title', config('sweet-alert.default_title', 'Default Title'))),
            text: @json(session('rk-alert.text', config('sweet-alert.default_text'))),
            icon: @json(session('rk-alert.icon', config('sweet-alert.default_icon', 'info'))),
            confirmButtonText: '{{ session('rk-alert.confirmButtonText', config('sweet-alert.confirmButtonText', 'OK')) }}',
            showCancelButton: {{ session('rk-alert.showCancelButton', config('sweet-alert.showCancelButton', false)) ? 'true' : 'false' }},
            confirmButtonColor: '{{ session('rk-alert.confirmButtonColor', config('sweet-alert.confirmButtonColor', '#3085d6')) }}',
            cancelButtonColor: '{{ session('rk-alert.cancelButtonColor', config('sweet-alert.cancelButtonColor', '#d33')) }}',
        });
    </script>
@endif