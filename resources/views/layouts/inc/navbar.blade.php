            <nav
                class="top-0 left-0 w-full z-10 bg-indigo-600 md:flex-row md:flex-nowrap md:justify-start flex items-center p-4  md:block  ">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <span class="text-white text-sm uppercase hidden lg:inline-block font-semibold"> @yield('page_name')
                    </span>
                    <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center  pl-3 py-3"><i
                                    class="fas fa-search"></i></span>
                            <input type="text" placeholder="Search here..."
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
                        </div>
                    </form>
                    <div class="">

                        @include('layouts.inc.menu')
                    </div>

                </div>
            </nav>
