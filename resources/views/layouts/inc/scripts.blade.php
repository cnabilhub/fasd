<script src="{{ asset('/js/alpinejs.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer> </script>
<script>
    function deleteItem(event, id) {
        try {
            event.preventDefault();
            Swal.fire({
                title: 'Êtes-vous sûr de vouloir supprimer cette entreprise?',
                showDenyButton: true,
                confirmButtonText: 'Supprimer',
                denyButtonText: 'Annuler',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteform-' + id).submit()

                }
            })
        } catch (error) {
            console.log(error);
        }

    }
</script>
