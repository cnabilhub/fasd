@extends('layouts.app')
@section('page_name')
    Ajouter Entreprise / Auto-Entrepreneur
@endsection
@section('content')
    <div class="p-4">
        <form action="{{ route('companies.store') }}" method="POST" class="container mx-auto" enctype="multipart/form-data">
            @csrf
            {{-- name  and email _________________________________ --}}

            <div class="grid gap-x-8 gap-y-4 md:grid-cols-2  sm:grid-cols-1 ">

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Nom de l entreprise : </div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-building"></i>
                    </div>
                    <input type="text" name="name"
                        class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                        value="{{old('name')}}">
                </div>



                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Email :</div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <input type="text" name="email"
                        class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                        value="{{old('email')}}">
                </div>
            </div>


            {{-- desc _________________________________ --}}

            <div class="mb-2 relative">
                <div class="text-sm text-gray-500 mb-4"> Description courte: </div>
                <div class="absolute ml-4 mt-2 text-indigo-400">
                    <i class="fas fa-info-circle"></i>
                </div>
                <input type="text" name="desc"
                    class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                    value="{{old('desc')}}">
            </div>

            {{-- address _________________________________ --}}

            <div class="mb-2 relative">
                <div class="text-sm text-gray-500 mb-4"> Address :</div>
                <div class="absolute ml-4 mt-2 text-indigo-400">
                    <i class="fas fa-map-pin"></i>
                </div>
                <input type="text" name="address"
                    class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                    value="{{old('address')}}">
            </div>

            {{-- img _________________________________ --}}

            <div
                class="grid gap-x-8 gap-y-4 md:grid-cols-1  sm:grid-cols-1 mb-3 bg-indigo-50 border border-indigo-300 p-4 rounded-lg ">
                <div>
                    <div class="text-sm text-gray-500 mb-4"> Logo : </div>
                    <img src="{{ asset('/img/default.jpg') }}" alt="" srcset=""
                        class=" rounded-lg bg-indigo-50 border border-indigo-300 max-w-xs ">
                </div>
                <div class="mb-2 relative">
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-images"></i>
                    </div>
                    <input type="file" name="img"
                        class="appearance-none w-full p-2 px-3 pl-10 text-base text-gray-600 bg-indigo-100">
                </div>
            </div>

            <div class="grid gap-x-8 gap-y-4 md:grid-cols-2  sm:grid-cols-1 ">

                {{-- phone _________________________________ --}}

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Telephone : </div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-phone-square"></i>
                    </div>
                    <input type="number" name="phone"
                        class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300 border-s"
                        value="{{old('phone')}}">
                </div>

                {{-- RCS _________________________________ --}}

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Registre du commerce et des soci??t??s</div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <input type="text" name="RCS"
                        class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                        value="{{old('RCS')}}">
                </div>

                {{-- TVA _________________________________ --}}

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> TVA taxe sur la valeur ajout??e</div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <input type="text" name="TVA" class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                        value="{{ old('TVA')}}" >
                </div>

                {{-- NTVA _________________________________ --}}

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Num??ro TVA Intracommunautaire </div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <input type="text" name="NTVA"
                        class="w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300"
                        value="{{old('NTVA')}}">
                </div>

                {{-- Country _________________________________ --}}

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Pays</div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="absolute mr-4 mt-2 text-gray-400 right-0">
                        <i class="fas fa-sort-down"></i>
                    </div>

                    <select name="country" class="appearance-none w-full p-2 px-3 pl-10 text-base text-gray-600 rounded-lg bg-white border border-indigo-300">
                        <option value="{{old('country')}}" selected > Morocco</option>
                        <option value="2">France</option>
                    </select>

                </div>

                {{-- Note _________________________________ --}}

                <div class="mb-2 relative">
                    <div class="text-sm text-gray-500 mb-4"> Note :</div>
                    <div class="absolute ml-4 mt-2 text-indigo-400">
                        <i class="fas fa-clipboard"></i>
                    </div>
                    <textarea name="note"
                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-yellow-50 border border-yellow-300">{{old('note')}}</textarea>
                </div>

            </div>

            <!--footer-->
            <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                <button
                    class="bg-pink-600 text-white active:bg-pink-900  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-4 ease-linear transition-all duration-150">
                    <i class="fas fa-times-circle mr-2"></i>Close
                </button>
                <button
                    class="bg-indigo-600 text-white active:bg-indigo-900  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-4 ease-linear transition-all duration-150"
                    type="submit">
                    <i class="fas fa-save mr-2"></i> Enregistrer
                </button>
        </form>

    </div>
@endsection
