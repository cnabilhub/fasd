       <nav
           class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
           <div
               class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
               <button
                   class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                   type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                   <i class="fas fa-bars"></i>
               </button>
               <div class="md:block text-left md:pb-2  inline-block whitespace-nowrap p-4 sm:p-1     px-0">

                   @include('components.logo')

               </div>
               <div class="block"> </div>

               <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                   id="example-collapse-sidebar">
                   <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-grayGray-200">
                       <div class="flex flex-wrap">
                           <div class="w-6/12">
                               <x-logo />
                           </div>
                           <div class="w-6/12 flex justify-end">
                               <button type="button"
                                   class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                   onclick="toggleNavbar('example-collapse-sidebar')">
                                   <i class="fas fa-times"></i>
                               </button>
                           </div>
                       </div>
                   </div>
                   <form class="mt-6 mb-4 md:hidden">
                       <div class="mb-3 pt-0">
                           <input type="text" placeholder="Search"
                               class="border-0 px-3 py-2 h-12  border-solid border-grayGray-500 placeholder-grayGray-300 text-grayGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                       </div>
                   </form>

                   <div class="my-3 border-b border-solid border-blueGray-200 rounded-t"></div>

                   <ul class="md:flex-col md:min-w-full flex flex-col list-none">

                       <li class="items-center ">
                           <a href="{{ route('dashboard') }}"
                               class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600 hover:bg-gray-50  rounded-md">
                               <i class="fas fa-tachometer-alt mr-1"></i>
                               ACCUEIL
                           </a>
                       </li>

                       <li class="items-center">
                           <a href="{{ route('companies.index') }}"
                           class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600 hover:bg-gray-50  rounded-md">
                           <i class="fas fa-building mr-1"></i>
                               Entreprises
                           </a>
                       </li>

                       <li class="items-center">
                           <a href="{{ route('dashboard') }}"
                           class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600 hover:bg-gray-50  rounded-md">
                           <i class="fas fa-concierge-bell mr-1"></i>
                               Services
                           </a>
                       </li>

                       <li class="items-center">
                           <a href="{{ route('dashboard') }}"
                           class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600 hover:bg-gray-50  rounded-md">
                           <i class="fas fa-users mr-1"></i>
                               Clients
                           </a>
                       </li>

                       <li class="items-center">
                           <a href="{{ route('dashboard') }}"
                           class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600 hover:bg-gray-50  rounded-md">
                           <i class="fas fa-file-invoice mr-1"></i>
                               Factures
                           </a>
                       </li>


                       <li class="items-center">
                           <a href="{{ route('dashboard') }}"
                           class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600 hover:bg-gray-50  rounded-md">
                           <i class="fas fa-file-invoice mr-1"></i>
                               Devis
                           </a>
                       </li>


                   </ul>

                   <div class="my-3 border-b border-solid border-blueGray-200 rounded-t"></div>

                   <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                       <li class="items-center">
                           <a href="{{ route('dashboard') }}"
                               class="text-sm uppercase p-3 font-bold block text-gray-500 hover:text-gray-600">
                               <i class="fas fa-cog mr-1"></i>
                               Paramètres
                           </a>
                       </li>

                       <li class="items-center">
                           <a href="{{ route('logout') }}"
                               class="text-sm uppercase p-3 font-bold block text-pink-600 bg-pink-100 hover:text-pink-400  ">
                               <i class="far fa-arrow-alt-circle-right mr-1"></i>
                               Deconnection
                           </a>
                       </li>

                   </ul>

               </div>
           </div>
       </nav>

       <script>
           /* Sidebar - Side navigation menu on mobile/responsive mode */
           function toggleNavbar(collapseID) {
               document.getElementById(collapseID).classList.toggle("hidden");
               document.getElementById(collapseID).classList.toggle("bg-white");
               document.getElementById(collapseID).classList.toggle("m-2");
               document.getElementById(collapseID).classList.toggle("py-3");
               document.getElementById(collapseID).classList.toggle("px-6");
           }
       </script>
