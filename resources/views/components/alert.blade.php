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

    @if ($errors->any())

        <script>
            Swal.fire({
                icon: 'error',
                // title: 'Oops...',
                title: `<div class="mt-3  mb-4 list-disc list-inside text-sm text-white-600">
                    @foreach ($errors->all() as $error)
                        <div class="text-pink-600 text-sm block mb-1"> {{ $error }}</div>
                    @endforeach 
                    </div>`

            })
        </script>

    @endif

    @if (session()->has('message'))

        <script>
            Swal.fire({
                icon: 'success',
                title: ' {{ session()->get('message') }}',
            })
        </script>

    @endif
