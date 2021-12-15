@extends('layouts.app')
@section('page_name')
    Mes entreprises
@endsection
@section('content')

    @include('companies.add-modal')

    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2 lg:grid-cols-3 sm:grid-cols-1 ">
        @foreach ($companies as $c)

            <div class="bg-white  rounded-lg  shadow-gray-200 shadow-lg overflow-hidden">
                <div class="bg-gray-600 text-white p-5 rounded-tl-lg rounded-tr-lg border border-gray-600">
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
                            <td>{{ $c->tax_id }}</td>
                        </tr>
                    </table>

                </div>

                <div class="divide-y divide-indigo-500"></div>
                <div class="actions p-2 mt-1">


                    <a href="{{ route('companies.show', $c->id) }}"
                        class="p-3 bg-orange-500 text-orange-50 text-sm rounded-md shadow-lg shadow-orange-500/50 focus:outline-none"><i
                            class="fas fa-eye"></i></a>

                    <a href="#"
                        class="p-3 bg-indigo-500 text-indigo-50 text-sm rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none"><i
                            class="fas fa-edit"></i></a>

                    <form action="" class="inline">
                        <button type="submit"
                            class="p-3 bg-pink-500 text-pink-50 text-sm font-semibold rounded-md shadow-lg shadow-pink-500/50 focus:outline-none"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>




                </div>
            </div>


        @endforeach



    </div>
    <div class="row mx-auto p-5 mt-4 bg-indigo-50 text-indigo-800">
        {{ $companies->links() }}
    </div>
@endsection
