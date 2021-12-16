@extends('layouts.app')
@section('page_name')
    Mes entreprises
@endsection
@section('content')

    <a href="{{ route('companies.create') }}"
        class="bg-indigo-600 text-white active:bg-indigo-900 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-4 ease-linear transition-all duration-150"
        type="button" x-on:click="modal=!modal">
        <i class="fas fa-plus-circle mr-2"></i> Ajouter Entreprise / Auto-Entrepreneur
    </a>

    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2 lg:grid-cols-3 sm:grid-cols-1 ">
        @foreach ($companies as $c)

            <div class="bg-white  rounded-lg  shadow-gray-200 shadow-lg overflow-hidden">
                <div
                    class="bg-indigo-100 text-indigo-500 p-5 rounded-tl-lg rounded-tr-lg border border-indigo-100 font-bold">
                    {{ $c->name }}
                </div>

                <div class="p-5 pb-2 mx-auto text-gray-500">

                    <table>
                        <tr>
                            <th>
                                <i class="fas fa-phone-square mr-3"></i>
                            </th>
                            <td>{{ $c->phone }}</td>
                        </tr>
                        <tr>
                            <th>
                                <i class="fas fa-envelope-open mr-3"></i>
                            </th>
                            <td>{{ $c->email }}</td>
                        </tr>
                        <tr>
                            <th>
                                <i class="fas fa-file-invoice-dollar mr-3"></i>
                            </th>
                            <td>{{ $c->RCS }}</td>
                        </tr>
                    </table>

                </div>

                <div class="divide-y divide-indigo-500"></div>
                <div class=" ml-3 p-2 mt-1 flex justify-between items-center mb-3">


                    <div class=" actions">
                        <a href="{{ route('companies.show', $c->id) }}"
                            class="p-2 bg-orange-500 text-orange-50 text-sm rounded-md shadow-lg shadow-orange-500/50 focus:outline-none"><i
                                class="fas fa-eye"></i></a>


                        <a class="p-2 bg-indigo-500 text-indigo-50 text-sm rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none"
                            href="{{ route('companies.edit', $c->id) }}"><i class="fas fa-edit"></i></a>


                        <form action="{{ route('companies.destroy', $c->id) }}" class="inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="deleteItem();"
                                class="p-2 px-3 bg-pink-500 text-pink-50 text-sm font-semibold rounded-md shadow-lg shadow-pink-500/50 focus:outline-none"><i
                                    class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                    <span class="mx-2 text-xs text-gray-300">
                        <i class="fas fa-clock mr-2"></i> {{ $c->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>


        @endforeach

    </div>

    @if ($companies->count() == 0)
        <div class="text-center text-xl text-indigo-800 p-6 bg-indigo-100 w-full ">
            La liste des entreprises est vide
        </div>
    @endif
    <div class="row mx-auto p-5 mt-4 bg-indigo-50 text-indigo-800">
        {{ $companies->links() }}
    </div>
@endsection

@section('js')
    <script>
        function deleteItem(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Êtes-vous sûr de vouloir supprimer cette entreprise?',
                showDenyButton: true,
                confirmButtonText: 'Supprimer',
                denyButtonText: `Annuler`,
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.parentElement.parentElement.submit()
                    // Swal.fire('Saved!', '', 'success')
                }
            })
        }
    </script>
@endsection
