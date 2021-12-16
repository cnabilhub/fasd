<form action="{{ route('companies.store') }}" method="POST" class="container mx-auto" enctype="multipart/form-data">
    @csrf

    {{-- name  and email _________________________________ --}}

    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2  sm:grid-cols-1 ">

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Nom de l entreprise : </div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-building"></i>
            </div>
            <input type="text" name="name"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->name)){{ $company->name }}@endif">
        </div>



        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Email :</div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-envelope"></i>
            </div>
            <input type="text" name="email"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->email)){{ $company->email }}@endif">
        </div>
    </div>


    {{-- desc _________________________________ --}}

    <div class="mb-2">
        <div class="text-sm text-gray-500 mb-4"> Description courte: </div>
        <div class="absolute ml-4 mt-4 text-gray-400">
            <i class="fas fa-info-circle"></i>
        </div>
        <input type="text" name="desc"
            class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
            value="@if (isset($company->name)){{ $company->desc }}@endif">
    </div>

    {{-- address _________________________________ --}}

    <div class="mb-2">
        <div class="text-sm text-gray-500 mb-4"> Address :</div>
        <div class="absolute ml-4 mt-4 text-gray-400">
            <i class="fas fa-map-pin"></i>
        </div>
        <input type="text" name="address"
            class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
            value="@if (isset($company->name)){{ $company->address }}@endif">
    </div>

    {{-- img _________________________________ --}}

    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2  sm:grid-cols-1 mb-3">
        <div>
            <img src="{{ asset('/img/angular.jpg') }}" alt="" srcset=""
                class=" rounded-lg bg-indigo-50 border border-indigo-300 max-w-xs ">
        </div>
        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Logo de l entreprise :</div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-images"></i>
            </div>
            <input type="file" name="img"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300">
        </div>
    </div>

    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2  sm:grid-cols-1 ">

        {{-- phone _________________________________ --}}

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Telephone : </div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-phone-square"></i>
            </div>
            <input type="number" name="phone"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->name)){{ $company->phone }}@endif">
        </div>

        {{-- RCS _________________________________ --}}

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Registre du commerce et des sociétés</div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <input type="text" name="RCS"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->name)){{ $company->RCS }}@endif">
        </div>

        {{-- TVA _________________________________ --}}

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> TVA taxe sur la valeur ajoutée</div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <input type="text" name="TVA"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->name)){{ $company->TVA }}@endif">
        </div>

        {{-- NTVA _________________________________ --}}

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Numéro TVA Intracommunautaire </div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <input type="text" name="NTVA"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->name)){{ $company->NTVA }}@endif">
        </div>

        {{-- Country _________________________________ --}}

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Pays</div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <input type="text" name="country"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-indigo-50 border border-indigo-300"
                value="@if (isset($company->name)){{ $company->country }}@endif">
        </div>

        {{-- Note _________________________________ --}}

        <div class="mb-2">
            <div class="text-sm text-gray-500 mb-4"> Note :</div>
            <div class="absolute ml-4 mt-4 text-gray-400">
                <i class="fas fa-clipboard"></i>
            </div>
            <textarea name="note"
                class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-yellow-50 border border-yellow-300">@if (isset($company->name)){{ $company->note }}@endif</textarea>
        </div>

    </div>

    <!--footer-->
    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button
            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
            type="button" x-on:click="modal=false">
            Close
        </button>
        <button
            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
            type="submit">
            Save Changes
        </button>
</form>
