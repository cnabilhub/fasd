@extends('layouts.app')
@section('page_name')
    {{ $company->name }}
@endsection
@section('content')
    <div class="bg-white  rounded-lg  shadow-gray-200 shadow-lg overflow-hidden">
        <div class="bg-gray-600 text-white p-5 rounded-tl-lg rounded-tr-lg border border-gray-600">
            {{ $company->name }}
        </div>

        <div class="p-5 mx-auto text-gray-500">

            <div class="flex flex-wrap justify-start my-2">
                <div class="w-6/12 sm:w-2/12 pr-2">
                    <img src="{{ asset('/img/sketch.jpg') }}" alt="..."
                        class="shadow-lg rounded max-w-full h-auto align-middle border-none" />
                </div>
                <div class="w-6/12 sm:w-10/12 ">
                    <span> {{ $company->desc }}</span>
                </div>
            </div>

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
            <div class="flex">
                <span> <img src="" alt=""></span>

            </div>



        </div>

        <div class="divide-y divide-indigo-500"></div>
        <div class="actions p-3 mt-4">

            <button
                class="py-2 px-3 bg-indigo-500 text-indigo-50 text-sm rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none">
                <i class="fas fa-edit"></i>
            </button>

            <button
                class="py-2 px-3 bg-pink-500 text-pink-50 text-sm font-semibold rounded-md shadow-lg shadow-pink-500/50 focus:outline-none">
                <i class="fas fa-trash-alt"></i>
            </button>

            <button
                class="py-2 px-3 bg-green-500 text-green-50 text-sm font-semibold rounded-md shadow-lg shadow-green-500/50 focus:outline-none">
                <i class="fab fa-whatsapp"></i>
            </button>

            <button
                class="py-2 px-3 bg-red-500 text-red-50 text-sm font-semibold rounded-md shadow-lg shadow-red-500/50 focus:outline-none">
                <i class="fas fa-envelope-open"></i>
            </button>

        </div>
    </div>
@endsection
