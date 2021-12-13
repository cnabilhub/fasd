    <div class="row mx-auto p-2 my-2 bg-white text-indigo-800">

        <button
            class="bg-indigo-800 text-white active:bg-indigo-900 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1  ease-linear transition-all duration-150"
            type="button" onclick="toggleModal('small-modal-id')">
            <i class="fas fa-plus-circle mr-2"></i>Ajouter entreprise
        </button>
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center "
            id="small-modal-id">
            <div class="relative w-auto my-6 mx-auto max-w-md">
                <!--content-->
                <div
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-neutral-50 outline-none focus:outline-none">
                    <!--header-->
                    <div
                        class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                        <h3 class="text-xl font-semibold">
                            Ajouter une entreprise :
                        </h3>
                        <button
                            class="p-1 ml-auto my-auto border-0 bg-pink-200 text-pink-600  float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                            onclick="toggleModal('small-modal-id')">
                            <span
                                class="bg-pink-200 text-pink-600  h-6 w-6 text-2xl  outline-none focus:outline-none  justify-center items-center flex rounded p-2 ">
                                ×
                            </span>
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <form action="">

                            {{-- name --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3 mb-3">
                                    <i class="fas fa-building mr-1"></i>
                                </span>
                                <input type="text" placeholder="Small Input"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white  rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            </div>

                            {{-- email --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3">
                                    <i class="fas fa-envelope-open mr-3"></i>
                                </span>
                                <input type="email" placeholder="Small Input"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            </div>

                            {{-- desc --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3">
                                    <i class="far fa-file-alt"></i>
                                </span>
                                <textarea
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"></textarea>
                            </div>

                            {{-- image --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3">
                                    <i class="fas fa-images"></i>
                                </span>
                                <input type="file" placeholder="image"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            </div>

                            {{-- phone --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3">
                                    <i class="fas fa-phone-square"></i>
                                </span>
                                <input type="phone" placeholder="phone"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            </div>

                            {{-- tax-id --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </span>
                                <input type="text" placeholder="tax-id "
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            </div>

                            {{-- Note --}}
                            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1 pt-3">
                                    <i class="far fa-sticky-note"></i>
                                </span>
                                <textarea
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"></textarea>
                            </div>

                        </form>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('small-modal-id')">
                            Close
                        </button>
                        <button
                            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('small-modal-id')">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="small-modal-id-backdrop"></div>

    </div>
