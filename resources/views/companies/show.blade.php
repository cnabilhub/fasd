@extends('layouts.app')
@section('page_name')
    {{ $company->name }}
@endsection
@section('content')
    <div class="bg-white  rounded-lg  shadow-gray-200 shadow-lg overflow-hidden">
        <div class="bg-indigo-300 text-white p-5 rounded-tl-lg rounded-tr-lg border">

            <div class="flex items-center justify-between text-indigo-600 font-bold">

                <div>{{ $company->name }}
                </div>

                <div class="flex">
                    <a class="p-2 bg-indigo-500 text-indigo-50 text-sm rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none px-2"
                        href="{{ route('companies.edit', $company->id) }}"><i class="fas fa-edit"></i> Edit </a>

                        <div class="mx-2"></div>

                        <form action="{{ route('companies.destroy', $company->id) }}" class="inline" method="POST"
                            id="deleteform-{{ $company->id }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="deleteItem(event,{{ $company->id }})"
                                class="p-2 px-3 bg-pink-500 text-pink-50 text-sm font-semibold rounded-md shadow-lg shadow-pink-500/50 focus:outline-none"><i
                                class="fas fa-trash-alt"></i> Remove </button>
                            </form>
                        </div>
                </div>
        </div>

        <div class="p-5 mx-auto text-gray-500">

            <div class="flex flex-wrap justify-start my-2">
                <div class="w-6/12 sm:w-2/12 pr-2">
                    <img src="@if ($company->img){{ asset('/storage/avatars') . '/' . $company->img }}@else{{ asset('/img/sketch.jpg') }}@endif" alt="..."
                        class="shadow-lg rounded max-w-full h-auto align-middle border-none" />
                </div>
                <div class="w-6/12 sm:w-10/12 p-4">
                    <span> {{ $company->desc }}</span>
                    <table>
                        <tr>
                            <th>
                                <i class="fas fa-phone-square mr-3"></i>
                            </th>
                            <td> {{ $company->phone }}</td>
                        </tr>
                        <tr>
                            <th>
                                <i class="fas fa-envelope-open mr-3"></i>
                            </th>
                            <td> {{ $company->email }}</td>
                        </tr>
                        <tr>
                            <th>
                                <i class="fas fa-file-invoice-dollar mr-3"></i>
                            </th>
                            <td> {{ $company->RCS }}</td>
                        </tr>
                    </table>
                </div>
            </div>


        </div>


    </div>
@endsection
