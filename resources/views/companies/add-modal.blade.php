    <div class="row mx-auto p-2 my-2 bg-white text-indigo-800" x-data="{ modal: false }">

        <button
            class="bg-indigo-800 text-white active:bg-indigo-900 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1  ease-linear transition-all duration-150"
            type="button" x-on:click="modal=!modal">
            <i class="fas fa-plus-circle mr-2"></i>Ajouter entreprise
        </button>

        <div x-show="modal">


            <div class=" overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center "
                id="small-modal-id">
                <div class="relative w-auto my-6 mx-auto max-w-md">
                    <!--content-->
                    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-gray-100 outline-none focus:outline-none"
                        @click.outside="modal = false">
                        <!--header-->
                        <div
                            class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                            <h3 class="text-xl font-semibold">Ajouter une entreprise :</h3>
                            <button
                                class="p-1 ml-auto my-auto border-0 bg-pink-200 text-pink-600  float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                x-on:click="modal=false">
                                <span
                                    class="bg-pink-200 text-pink-600  h-6 w-6 text-2xl  outline-none focus:outline-none  justify-center items-center flex rounded p-2 ">×</span>
                            </button>
                        </div>

                        <!--body-->
                        <div class="relative p-6 flex-auto" class="bg-gray-100">

                            {{-- ############## COMPANY FORM _________________________________ --}}

                            <form action="{{ route('companies.store') }}" method="POST">
                                @csrf
                                {{-- name _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Nom de l entreprise :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <input type="text" name="name"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>


                                {{-- email _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Email :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="text" name="email"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>

                                {{-- desc _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Description :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                    <input type="text" name="desc"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>

                                {{-- address _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Address :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-map-pin"></i>
                                    </div>
                                    <input type="text" name="address"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>

                                {{-- img _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Logo de l entreprise :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <input type="file" name="img"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>

                                {{-- phone _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Telephone :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-phone-square"></i>
                                    </div>
                                    <input type="number" name="phone"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>

                                {{-- tax_id _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Taxes ID :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-money-check-alt"></i>
                                    </div>
                                    <input type="text" name="tax_id"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300">
                                </div>

                                {{-- note _________________________________ --}}

                                <div class="mb-2">
                                    <div class="text-sm text-gray-500 mb-4"> Note :</div>
                                    <div class="absolute ml-4 mt-4 text-gray-400">
                                        <i class="fas fa-clipboard"></i>
                                    </div>
                                    <textarea name="note"
                                        class="w-full px-5 py-4 pl-10 text-base text-gray-600 rounded-lg bg-white border border-slate-300"></textarea>
                                </div>

                                <!--footer-->
                                <div
                                    class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div x-show="modal" class=" opacity-25 fixed inset-0 z-40 bg-black"></div>
    </div>
    </div>
