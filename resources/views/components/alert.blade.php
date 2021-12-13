@if ($errors->any())
    <link rel="stylesheet" href="{{ asset('/css/sweetalert2.min.css') }}" />

    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>

    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            // text: 'Something went wrong!',
            footer: '<ul class="mt-3 list-disc list-inside text-sm text-white-600">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach </ul>'

        })
    </script>


@endif
